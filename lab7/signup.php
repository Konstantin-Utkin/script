<?php
    require_once ("include/common.inc.php");

    $errors = array();
    $UserInfo = new UserInfo;

    if(isPost()) //данные пришли
    {
        $UserInfo = getUserFromRequest($UserInfo);
        $errors = validateUserInfo($UserInfo, $errors);
        
        if(empty($errors))
        {
            $UserInfo->newUserRegistered = True;
            saveUserInfo($UserInfo);
        }

    }
    
    createSignupPage($UserInfo, $errors, TEMPLATE_SIGNUP);
      

    


