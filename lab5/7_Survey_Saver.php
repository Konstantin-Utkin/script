<?php

    require_once("include/common.inc.php");

    $Man = new Man;
    $Man = getSurveyFromRequest($Man);
    if($Man->email)
    {
        $saveResult = saveSurvayToFile($Man);
        if($saveResult)    
            echo("ok");
        else
            echo("cant save file");
    }
    else
        echo("param 'email' is empty");
 








