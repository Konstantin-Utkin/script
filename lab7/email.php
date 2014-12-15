<?php
    require_once ("include/common.inc.php");
    
    if($_POST['email'] != "")
    {
        $userDBData = getUserInfo($_POST['email']);
        $userObjData = new userInfo;
        $userObjData->fname = $userDBData[0]["login_fname"];
        $userObjData->lname = $userDBData[0]["login_sname"];
        $userObjData->email = $userDBData[0]["login_email"];
        $userObjData->password = $userDBData[0]["login_password"];
        $userObjData->sex = $userDBData[0]["login_sex"];
        list($userObjData->year, $month, $userObjData->day) = sscanf($userDBData[0]["login_birthday"], "%04s-%02s-%02s");
        $userObjData->month=numToMonth($month);
        createSignupPage($userObjData, "", TEMPLATE_VIEW);
     
    }
