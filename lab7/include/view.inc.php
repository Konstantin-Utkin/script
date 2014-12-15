<?php

    require_once ("include/common.inc.php");

    function createFindPage()
    {
        include("templates/find.html");
    }


    function createSignupPage($UserInfo, $errors, $visualform)
    {
        $smarty = new Smarty();

        $setMonth=Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

        $smarty->setTemplateDir('D:\Google\Server2Go\htdocs\script\lab7\templates');

        $smarty->assign('error_fname', $errors['fname']);
        $smarty->assign('error_lname', $errors['lname']);
        $smarty->assign('error_email', $errors['email']);
        $smarty->assign('error_remail', $errors['remail']);
        $smarty->assign('error_password', $errors['password']);
        $smarty->assign('error_sex', $errors['sex']);
        $smarty->assign('error_month', $errors['month']);
        $smarty->assign('error_day', $errors['day']);
        $smarty->assign('error_year', $errors['year']);
        

        $smarty->assign('fname', $UserInfo->fname);
        $smarty->assign('lname', $UserInfo->lname);
        $smarty->assign('email', $UserInfo->email);
        $smarty->assign('remail', $UserInfo->remail);

        if($UserInfo->sex == "Male")
        {
            $html = "<option disabled>Select Sex:</option>";
            $html .= "<option selected>Male</option>";
            $html .= "<option>Female</option>";
            $smarty->assign('sex', $html);
        }
        elseif($UserInfo->sex == "Female")
        {
            $html = "<option disabled>Select Sex:</option>";
            $html .= "<option>Male</option>";
            $html .= "<option selected>Female</option>";
            $smarty->assign('sex', $html);
        }
        else
        {
            $html = "<option selected disabled>Select Sex:</option>";
            $html .= "<option>Male</option>";
            $html .= "<option>Female</option>";
            $smarty->assign('sex', $html);
        }

        if($UserInfo->month == "")
            $html="<option selected disabled>Month:</option>";
        else
            $html="<option disabled>Month:</option>";
        for($i = 0; $i < 12; $i++)
        {
            if($UserInfo->month == $setMonth[$i])
                $html .= "<option selected>" . $setMonth[$i] . "</option>\n";
            else
                $html .= "<option>" . $setMonth[$i] . "</option>\n";
        }
        $smarty->assign('month', $html);

        if($UserInfo->day == 0)
            $html="<option selected disabled>Day:</option>";
        else
            $html="<option disabled>Day:</option>";
        for($i = 1; $i <= 31; $i++)
        {
            if($UserInfo->day == $i)
                $html .= "<option selected>" . $i . "</option>\n";
            else
                $html .= "<option>" . $i . "</option>\n";
        }
        $smarty->assign('day', $html);

        if($UserInfo->year == 0)
            $html="<option selected disabled>Year:</option>";
        else
            $html="<option disabled>Year:</option>";
        for($i = date(Y); $i > 1900; $i--)
        {
            if($UserInfo->year==$i)
                $html .= "<option selected>" . $i . "</option>\n";
            else
                $html .= "<option>" . $i . "</option>\n";
        }
        $smarty->assign('year', $html);
        $smarty->assign('newUserRegistered', $UserInfo->newUserRegistered);

        $smarty->display($visualform);
    }
