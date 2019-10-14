<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External Quiz Answersheets API
 *
 * @package   quiz_answersheets
 * @copyright 2019 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use quiz_answersheets\utils;

defined('MOODLE_INTERNAL') || die;

require_once("$CFG->libdir/externallib.php");
require_once($CFG->dirroot . '/mod/quiz/locallib.php');

class quiz_answersheets_external extends external_api {

    /**
     * Describes the parameters for create_attempt.
     *
     * @return external_function_parameters
     */
    public static function create_attempt_parameters() {
        return new external_function_parameters([
                'quizid' => new external_value(PARAM_INT, 'Quiz Id'),
                'userid' => new external_value(PARAM_INT, 'User Id')
        ]);
    }

    /**
     * Describes the create_attempt return value.
     *
     * @return external_single_structure
     */
    public static function create_attempt_returns() {
        return new external_single_structure([
                'success' => new external_value(PARAM_BOOL, 'success: true/false'),
                'message' => new external_value(PARAM_TEXT, 'response message'),
                'id' => new external_value(PARAM_INT, 'ID of new attempt if success.')
        ]);
    }

    /**
     * Create Attempt API
     *
     * @param int $quizid
     * @param int $userid
     * @return array
     */
    public static function create_attempt($quizid, $userid) {
        $message = '';

        $params = self::validate_parameters(self::create_attempt_parameters(), [
                'quizid' => $quizid,
                'userid' => $userid
        ]);

        list($course, $cm) = get_course_and_cm_from_instance($params['quizid'], 'quiz');
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $quizobj = quiz::create($params['quizid'], $params['userid']);

        // Check questions.
        if (!$quizobj->has_questions()) {
            throw new moodle_quiz_exception($quizobj, 'noquestionsfound');
        }

        $attempts = quiz_get_user_attempts($params['quizid'], $params['userid'], 'all');

        if (!utils::can_create_attempt($quizobj, $attempts)) {
            throw new moodle_exception('webservicecannotcreateattempts', 'quiz_answersheets');
        }

        $attemptnumber = count($attempts);
        $lastattempt = array_pop($attempts);
        $attempt = quiz_prepare_and_start_new_attempt($quizobj, $attemptnumber + 1, $lastattempt, false, [], [],
                $params['userid']);
        $response = ['success' => true, 'message' => $message, 'id' => $attempt->id];

        return $response;
    }

}
