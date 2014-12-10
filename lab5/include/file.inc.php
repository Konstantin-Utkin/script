<?php
  require_once("include/common.inc.php");


  function saveSurvayToFile($surveyInfo) 
  {
    $email = $surveyInfo->email;
    $file = fopen("data/".$email.".txt", "w");
    if((fwrite($file, $surveyInfo->first_name."\n"))&&
       (fwrite($file, $surveyInfo->last_name."\n"))&&
       (fwrite($file, $surveyInfo->email."\n"))&&
       (fwrite($file, $surveyInfo->age."\n")))
      echo ("ok");
    else
      echo ("Something wrong");
    fclose($file);
  }

  function getInfoFromFile($file)
  {
    $dataPeople = fgets($file);
    if($dataPeople != false)
      return $dataPeople;
    else
      return "";
  }

  function getSurveyFromFile($email, $people)
  {
    $file = fopen("data/".$email.".txt", "r");
    $people->first_name = getInfoFromFile($file);
    $people->last_name = getInfoFromFile($file);
    $people->email = getInfoFromFile($file);
    $people->age = getInfoFromFile($file);
    fclose($file); 
    return $people;  
  }
