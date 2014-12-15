<?php

    require_once("include/common.inc.php");

    $email = getEmailFromRequest();
    $Man = new Man;
  
    if($email)
    {
        $Man = getSurveyFromFile($email, $Man);
        printManClass($Man);
    }
    else
        echo("param 'email' is empty");
 







