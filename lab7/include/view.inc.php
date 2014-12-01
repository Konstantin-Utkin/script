<?php

    require_once ("include/common.inc.php");

    function createFindPage()
    {
        include("templates/find.html");
    }

    function createVisualPage($userData, $mode)
    {

        $setMonth=Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

        if ($mode == "signup")    
            include("templates/part0_header_signup.html");
        else
            include("templates/part0_header_view.html");

        include("templates/part1_fname.html");
        echo($userData->fname);

        include("templates/part2_lname.html");
        echo($userData->lname);

        include("templates/part3_email.html");
        echo($userData->email);


        if ($mode == "signup")    
        {
            include("templates/part4_remail.html");
            echo($userData->remail);

            include("templates/part5_password.html");
            echo($userData->password);
        }

        include("templates/part6_sex.html");
        if($userData->sex=="Male")
        {
            $html = "<option disabled>Select Sex:</option>";
            $html .= "<option selected>Male</option>";
            $html .= "<option>Female</option>";
        }
        elseif($userData->sex=="Female")
        {
            $html = "<option disabled>Select Sex:</option>";
            $html .= "<option>Male</option>";
            $html .= "<option selected>Female</option>";
        }
        else
        {
            $html = "<option selected disabled>Select Sex:</option>";
            $html .= "<option>Male</option>";
            $html .= "<option>Female</option>";
        }
        echo $html;

        include("templates/part7_month.html");
        if($userData->month=="")
            $html="<option selected disabled>Month:</option>";
        else
            $html="<option disabled>Month:</option>";
        for($i = 0; $i < 12; $i++)
        {
            if($userData->month==$setMonth[$i])
                $html .= "<option selected>".$setMonth[$i]."</option>\n";
            else
                $html .= "<option>".$setMonth[$i]."</option>\n";
        }
        echo $html;

        include("templates/part8_day.html");
        if($userData->day==0)
            $html="<option selected disabled>Day:</option>";
        else
            $html="<option disabled>Day:</option>";
        for($i = 1; $i <= 31; $i++)
        {
            if($userData->day==$i)
                $html .= "<option selected>".$i."</option>\n";
            else
                $html .= "<option>".$i."</option>\n";
        }
        echo $html;

        include("templates/part9_year.html");
        if($userData->year==0)
            $html="<option selected disabled>Year:</option>";
        else
            $html="<option disabled>Year:</option>";
        for($i = date(Y); $i > 1900; $i--)
        {
            if($userData->year==$i)
                $html .= "<option selected>".$i."</option>\n";
            else
                $html .= "<option>".$i."</option>\n";
        }
        echo $html;

        if ($mode == "signup")    
            include("templates/part10_footer_signup.html");
        else
            include("templates/part10_footer_view.html");
    }
