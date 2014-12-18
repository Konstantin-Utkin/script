<?php

    require_once ("include/common.inc.php");

    function getUserInfo($email)
    {
        $email = quoteDB($email);
        $query = "SELECT * FROM login_table WHERE login_email like '%" . $email . "%';";
        return queryDB($query);
    }
    
    function getUserList()
    {
        $userList = array();
        $userList = "SELECT * FROM login_table";
        return queryDB($userList);
    }  

    function toMySQLDate($month, $day, $year)
    {
        $setMonth=Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        for($i = 0; $i < 12; $i++)
            if($month == $setMonth[$i])
                return($year . "-" . ($i+1) . "-" . $day);
        return 0;
    }
    
    function saveUserInfo($userData)
    {
        $query = "INSERT INTO login_table (login_fname, login_sname, login_email, login_password, login_sex, login_birthday) VALUES ('";
        $query .= quoteDB($userData->fname);
        $query .= "', '";
        $query .= quoteDB($userData->lname);
        $query .= "', '";
        $query .= quoteDB($userData->email);
        $query .= "', '";
        $query .= quoteDB($userData->password);
        $query .= "', '";
        $query .= quoteDB($userData->sex);
        $query .= "', '";
        $query .= quoteDB(toMySQLDate($userData->month, $userData->day, $userData->year));
        $query .= "');";
        return(insertDB($query));
    }
      



