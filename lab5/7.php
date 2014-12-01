<?php

$people_array = array {
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'age' => '',
}
/*
 *@return array, assoc array with survay info
*/
function getSurveyFromRequest();

/*
 *@param array $survayInfo
*/

function saveSurvayToFile($surveyInfo); 


/*
 *@param string $email
 *@return array
*/
function getSurveyFromFile($email);




