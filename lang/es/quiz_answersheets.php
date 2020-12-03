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
 * Strings for component 'quiz_answersheets', language 'en'
 *
 * @package   quiz_answersheets
 * @copyright 2019 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Exportar intentos de cuestionarios';
$string['answersheets'] = 'Exportar intentos';
$string['answersheetsfilename'] = 'Intentos_de_cuestionario_exportados';
$string['answersheetsreport'] = 'Exportar intentos de cuestionarios';
$string['admin_instruction_message'] = 'Mensaje de instrucciones';
$string['admin_instruction_message_des'] = 'Si se escribe aquí, este texto será mostrado al inicio del reporte. Puedes usarlo para, por ejemplo, para enlazar a cualquier política institucional acerca de la impresión de cuestionarios sumativos.';
$string['answersheets:bulkdownload'] = 'Descargar todas las hojas de revisión en bloque';
$string['answersheets:componentname'] = 'Exportar intentos de cuestionario';
$string['answersheets:createattempt'] = 'Crear un intento para otro usuario';
$string['answersheets:submitresponses'] = 'Enviar respuestas de estudiante';
$string['answersheets:view'] = 'Ver hoja del intento (sin marcar)';
$string['answersheets:viewrightanswers'] = 'Ver hoja con respuestas';
$string['answer_sheet_label'] = 'Hoja con respuestas';
$string['attempt_sheet_label'] = 'Hoja del intento (sin marcar)';
$string['answer_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Hoja con respuestas';
$string['attempt_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Hoja del intento';
$string['bulkdownloadlink'] = 'Descargar todas las hojas de revisión en bloque';
$string['bulkinstructions'] = 'Para descargar todas las hojas de revisión en bloque, necesitarás la herramienta
`save-answersheets` en tu computadora. Una vez que la tengas:

1. Los intentos que serán descargados cuando sigas estas instrucciones están basados en los parámetros del reporte que dejaste en la página anterior.
   Lo que este proceso hará será seguir cada enlace de **Hoja de revisión** que aparezca en él. En caso de duda, retrocede y verifica que
   el reporte está mostrando los intentos que quieres exportar.
2. Una vez que estés de acuerdo, descarga el [archivo de pasos de descarga masiva]({$a->scripturl}) que le dirá al programa `save-answersheets` lo que debe hacer.
   **¡No olvides la advertencia de arriba!**
3. Descarga ese archivo (que se llamará`{$a->scriptname}-steps.txt`) en la misma carpeta que tienes el programa `save-answersheets`
   en tu computadora.
4. Abre una línea de comando (cmd / Símbolo de sistema) y ve a la carpeta donde está el programa y el archivo.
5. Escribe el comando `.\save-answersheets {$a->scriptname}-steps.txt` y espera su ejecución. Mostrará lo que está haciendo y terminará de ejecutarse.
6. Una vez que la ejecución del script termine, debes tener un archivo `{$a->scriptname}.zip` dentro de la carpeta `output`.
7. No olvides borrar el archivo `{$a->scriptname}-steps.txt`.';
$string['bulkinstructionstitle'] = 'Instrucciones para descargar todas las hojas de revisión en bloque';
$string['bulkinstructionswarning'] = '¡<b>Advertencia</b>! el archivo que descargaste en el Paso 2 de las instrucciones que vienen a continuación contiene suficiente 
información para la herramienta para acceder a los intentos de cuestionarios que serán descargados usando tu sesión actual. Tu <b>debes</b> eliminar
ese archivo tan pronto como termines con la descarga. Mantenerlo es un riesgo de seguridad.';
$string['column_answer_sheet'] = 'Hojas de respuestas';
$string['column_attempt_sheet'] = 'Hojas de intentos';
$string['column_submit_student_responses'] = 'Enviar respuestas de estudiante';
$string['create_attempt'] = 'Crear intento';
$string['create_attempt_modal_button'] = 'Crear';
$string['create_attempt_modal_description'] = 'Estás seguro de que deseas crear un intento de cuestionario para {$a}?';
$string['create_attempt_modal_title'] = 'Confirmación';
$string['event_attempt_created'] = 'Intento de cuestionario creado para el usuario';
$string['event_attempt_viewed'] = 'Hoja de intento de cuestionario visualizada';
$string['event_attempt_printed'] = 'Hoja de intento de cuestionario impresa';
$string['event_right_answer_viewed'] = 'Hoja de respuestas de cuestionario visualizada';
$string['event_right_answer_printed'] = 'Hoja de intentos de cuestionario impresa';
$string['event_responses_submitted'] = 'Respuestas de cuestionario enviadas por el usuario';
$string['examcode'] = 'Código de confirmación';
$string['interactive_content_warning'] = 'El contenido interactivo no está disponible en este formato.';
$string['page_type_attempt'] = 'Hoja de intento';
$string['page_type_review'] = 'Hoja de revisión';
$string['page_type_answer'] = 'Hoja de respuesta';
$string['print'] = 'Imprimir';
$string['privacy:metadata'] = 'El complemento de Exportar intento de cuestionarios no almacena información personal por sí mismo. Proporciona una interfaz adicional para ver y administrar los datos pertenecientes a la actividad de cuestionario.';
$string['print_header'] = '{$a->courseshortname} {$a->quizname} para {$a->studentname} generado {$a->generatedtime} - {$a->sheettype}';
$string['print_header_minimised'] = '{$a->courseshortname} {$a->quizname} generado {$a->generatedtime} - {$a->sheettype}';
$string['review_sheet_label'] = 'Hoja de revisión';
$string['review_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Hoja de revisión';
$string['showuserinfo'] = 'Identificando información para presentar acerca de usuarios';
$string['submit_student_responses_label'] = 'Enviar respuestas...';
$string['submit_student_responses_on_behalf'] = 'Enviar respuestas en nombre de {$a} y terminar intento';
$string['submit_student_responses_dialog_content'] = '¿Estás seguro de enviarla?';
$string['submit_student_responses_title'] = '{$a}: Enviar respuestas de intento';
$string['strftime_header'] = '%d %b %Y, %H:%M';
$string['user_identity_fields'] = ' ({$a})';
$string['webservicecannotcreateattempts'] = 'No se puede crear un intento';

// Question instruction.
$string['coderunner_instruction'] = 'Escribe tus respuestas en el espacio proporcionado.';
$string['ddwtos_instruction'] = 'Escribe la letra correspondiente (A, B, C, D, ...) en el espacio proporcionado.
Luego del item está el máximo número de veces que se puede usar, por ejemplo (1) significa que el item se puede usar una vez, (2) significa dos veces, y así. Un asterisco (*) significa que el item se puede usar ilimitadamente.';
$string['ddmarker_instruction'] = 'Marca los puntos de la imagen y escribe la letra de la respuesta correspondiente (A, B, C, D, …) junto a ellos.
Luego del item está el máximo número de veces que se puede usar, por ejemplo (1) significa que el item se puede usar una vez, (2) significa dos veces, y así. Un asterisco (*) significa que el item se puede usar ilimitadamente.';
$string['ddmarker_instruction'] = 'Marca los puntos de la imagen y escribe la letra de la respuesta correspondiente (A, B, C, D, …) junto a ellos.
Luego del item está el máximo número de veces que se puede usar, por ejemplo (1) significa que el item se puede usar una vez, (2) significa dos veces, y así. Un asterisco (*) significa que el item se puede usar ilimitadamente.';
$string['essay_instruction'] = 'Escribe tu respuesta en el espacio proporcionado.';
$string['match_instruction'] = 'Escribe la letra de la respuesta correspondiente (A, B, C, D, ...) en el espacio proporcionado.';
$string['multichoice_instruction'] = 'Elige la respuesta correcta.';
$string['numerical_instruction'] = 'Escribe tu respuesta (en valores numéricos) en el espacio proporcionado.';
$string['ordering_instruction'] = 'Escribe el orden correcto en el espacio proporcionado.';
$string['oumultiresponse_instruction'] = 'Elige la(s) respuesta(s) correcta(s).';
$string['pmatch_instruction'] = 'Escribe tu respuesta en el espacio proporcionado. Por favor mantenlo en una línea o dos.';
$string['pmatchjme_instruction'] = 'Escribe tu respuesta en el espacio proporcionado.';
$string['gapselect_instruction'] = 'Escribe la letra de la respuesta correspondiente (A, B, C, D, ...) en el espacio proporcionado.';
$string['shortanswer_instruction'] = 'Escribe tu respuesta en el espacio proporcionado. Por favor mantenlo en una línea o dos.';
$string['stack_instruction'] = 'Escribe tu respuesta en el espacio proporcionado.';
$string['truefalse_instruction'] = 'Elige la respuesta correcta.';
$string['varnumeric_instruction'] = 'Escribe tu respuesta en el espacio proporcionado.';
$string['varnumericset_instruction'] = 'Escribe tu respuesta en el espacio proporcionado.';
$string['varnumunit_instruction'] = 'Escribe tu respuesta en el espacio proporcionado.';
$string['wordselect_instruction'] = 'Elige la(s) respuesta(s) encerrando en un círculo la(s) palabra(s) clave(s).';
