<?php
    require_once("include/common.inc.php");

    function saveSurvayToFile($surveyInfo) 
    {
        $email = $surveyInfo->email;
        $file = fopen("data/" . $email . ".txt", "w");
        if($file)
        {
            $writeResult = fwrite($file, $surveyInfo->first_name . "\n");
            $writeResult = $writeResult && (fwrite($file, $surveyInfo->last_name . "\n"));
            $writeResult = $writeResult && (fwrite($file, $surveyInfo->email . "\n"));
            $writeResult = $writeResult && (fwrite($file, $surveyInfo->age . "\n"));
            fclose($file);
        }
        if($writeResult)
            return(1);
        else
            return(0);    
    }

    function getInfoFromFile($file)
    {
        $dataMan = fgets($file);
        if($dataMan != false)
            return $dataMan;
        else
            return "";
    }

    function getSurveyFromFile($email, $Man)
    {
        $file = fopen("data/" . $email . ".txt", "r");
        if($file)
        {
            $Man->first_name = getInfoFromFile($file);
            $Man->last_name = getInfoFromFile($file);
            $Man->email = getInfoFromFile($file);
            $Man->age = getInfoFromFile($file);
            fclose($file);
        } 
        return $Man;  
    }
