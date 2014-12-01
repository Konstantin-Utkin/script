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
    if(isset($_GET['email']))
    {
        $email = trim($_GET['email']);
    }
    return $email;
}

/*
 *@param string $email
 *@return array
*/
function getSurveyFromFile($email, $people_array)
{
    $file = fopen("data/".$email.".txt", "r");
    $people_array['first_name'] = fgets($file);
    $people_array['last_name'] = fgets($file);
    $people_array['email'] = fgets($file);
    $people_array['age'] = fgets($file);
    fclose($file); 
    return $people_array;  
}

function printPeopleArray($people_array)
{
    echo "First name: ".$people_array['first_name']."</br>";
    echo "Last name: ".$people_array['last_name']."</br>";
    echo "Email: ".$people_array['email']."</br>";
    echo "Age: ".$people_array['age']."</br>";
}

$email = getSurveyFromRequest();
$people_array = getSurveyFromFile($email, $people_array);
printPeopleArray($people_array);







