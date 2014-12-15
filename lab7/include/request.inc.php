<?php

    function isPost()
    {
        return $_SERVER['REQUEST_METHOD']=='POST';
    }

    function numToMonth($month)
    {
        $setMonth=Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        for($i = 0; $i < 12; $i++)
            if(($month-1) == $i)
                return($setMonth[$i]);
        return 0;
    }

    function PostParam($name, $defValue='')
    {
        return isset($_POST[$name]) ? $_POST[$name] : $defValue;
    }

    function validateUserInfo($UserInfo)
    {
    // test accuracy of data
        if($_POST['fname'] == "")
            $errors['fname'] = true;
        if($_POST['lname'] == "")
            $errors['lname'] = true;
        if($_POST['email'] == "")
            $errors['email'] = true;
        if($_POST['email'] != $_POST['remail'])
            $errors['remail'] = true;
        if($_POST['password'] == "")
            $errors['password'] = true;
        if(!isset($_POST['sex']))
            $errors['sex'] = true;
        if(!isset($_POST['month']))
            $errors['month'] = true;
        if(!isset($_POST['day']))
            $errors['day'] = true;
        if(!isset($_POST['year']))
            $errors['year'] = true;
        return $errors;
    }       
        
    function getUserFromRequest($UserInfo)
    {
        $UserInfo->fname = PostParam('fname');
        $UserInfo->lname = PostParam('lname');
        $UserInfo->email = PostParam('email');
        $UserInfo->remail = PostParam('remail');
        $UserInfo->password = PostParam('password');
        $UserInfo->sex = PostParam('sex');
        $UserInfo->month = PostParam('month');
        $UserInfo->day = PostParam('day');
        $UserInfo->year = PostParam('year');
        return $UserInfo;
    }
        
        
        