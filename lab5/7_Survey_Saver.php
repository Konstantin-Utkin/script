<?php

$people_array = array (
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'age' => '');

/*
 *@return array, assoc array with survay info
*/
function getSurveyFromRequest()
{
    if(isset($_GET['first_name']))
    {
        $people_array['first_name'] = trim($_GET['first_name']);
    }
    if(isset($_GET['last_name']))
    {
        $people_array['last_name'] = trim($_GET['last_name']);
    }
    if(isset($_GET['email']))
    {
        $people_array['email'] = trim($_GET['email']);
    }
    if(isset($_GET['age']))
    {
        $people_array['age'] = trim($_GET['age']);
    }
    return $people_array;
}
/*
 *@param array $survayInfo
*/

function saveSurvayToFile($surveyInfo) 
{
    $email = $surveyInfo['email'];
    $file = fopen("data/".$email.".txt", "w");
    fwrite($file, $surveyInfo['first_name']."\n");
    fwrite($file, $surveyInfo['last_name']."\n");
    fwrite($file, $surveyInfo['email']."\n");
    fwrite($file, $surveyInfo['age']."\n");
    fclose($file);
}


$people_array = getSurveyFromRequest();
saveSurvayToFile($people_array);







