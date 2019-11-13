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
 * This page creates a new attempt for a user.
 *
 * @package   quiz_answersheets
 * @copyright 2019 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use quiz_answersheets\utils;

require_once(__DIR__ . '/../../../../config.php');
require_once($CFG->dirroot . '/mod/quiz/locallib.php');

// Remember the current time as the time any responses were submitted
// (so as to make sure students don't get penalized for slow processing on this page).
$timenow = time();

$cmid = required_param('cmid', PARAM_INT);
$userid = required_param('userid', PARAM_INT);
$redirect = optional_param('redirect', '', PARAM_LOCALURL);

if (!$cm = get_coursemodule_from_id('quiz', $cmid)) {
    print_error('invalidcoursemodule');
}
if (!$course = $DB->get_record('course', array('id' => $cm->course))) {
    print_error('coursemisconf');
}

// Check login.
require_login($course, false, $cm);
require_capability('quiz/answersheets:createattempt', context_module::instance($cm->id));
require_sesskey();

$response = quiz_answersheets_external::create_attempt($cm->instance, $userid);
$attemptid = $response['id'];

if ($redirect !== '') {
    $redirect = new moodle_url($redirect);
} else {
    $redirect = new moodle_url('/mod/quiz/report.php',
            ['id' => $attemptobj->get_cmid(), 'mode' => 'answersheets']);
}
$redirect->param('lastchanged', $attemptid);
redirect($redirect);
