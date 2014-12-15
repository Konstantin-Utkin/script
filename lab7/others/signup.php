<?php
    require_once ("include/common.inc.php");

    // save all data to object $userData
    if(isset($_POST['fname'])) $userData->fname = $_POST['fname'];
    if(isset($_POST['lname'])) $userData->lname = $_POST['lname'];
    if(isset($_POST['email'])) $userData->email = $_POST['email'];
    if(isset($_POST['remail'])) $userData->remail = $_POST['remail'];
    if(isset($_POST['password'])) $userData->password = $_POST['password'];
    if(isset($_POST['sex'])) $userData->sex = $_POST['sex'];
    if(isset($_POST['month'])) $userData->month = $_POST['month'];
    if(isset($_POST['day'])) $userData->day = $_POST['day'];
    if(isset($_POST['year'])) $userData->year = $_POST['year'];
   
    // test accuracy of data
    $flag_record = False;
    if($_POST['fname'] == "")
        alert("Enter the first name");
    elseif($_POST['lname'] == "")
        alert("Enter the last name");
    elseif($_POST['email'] == "")
        alert("Enter the email");
    elseif($_POST['email'] != $_POST['remail'])
        alert("Emails is different");
    elseif($_POST['password'] == "")
        alert("Password is empty");
    elseif(!isset($_POST['sex']))
        alert("Enter the sex");
    elseif(!isset($_POST['month']))
        alert("Enter the month");
    elseif(!isset($_POST['day']))
        alert("Enter the day");
    elseif(!isset($_POST['year']))
        alert("Enter the year");
    else
        $flag_record = True;
    
    if($flag_record == False) 
        createVisualPage($userData, "signup");
    elseif(saveUserInfo($userData) == 1) 
        echo "ok";
    else 
        echo "something wrong";



