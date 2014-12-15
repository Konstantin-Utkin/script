<?php
    require_once("include/common.inc.php");

    function getEmailFromRequest()
    {
        $email = "";
        if(isset($_GET['email']))
        {
            $email = trim($_GET['email']);
        }
        return $email;
    }

    function getSurveyFromRequest($Man)
    {
    
        if(isset($_GET['first_name']))
        {
            $Man->first_name = trim($_GET['first_name']);
        }
        if(isset($_GET['last_name']))
        {
            $Man->last_name = trim($_GET['last_name']);
        }
        if(isset($_GET['email']))
        {
            $Man->email = trim($_GET['email']);
        }
        if(isset($_GET['age']))
        {
            $Man->age = trim($_GET['age']);
        }   
        return $Man;
    }

