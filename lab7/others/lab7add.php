<?php
    require_once ("include/common.inc.php");

$errors = array();
$newUserRegistered = False;

if(isPost()) //данные пришли
{
    $userInfo=getUserFromRequest();
    $errors=validateUserInfo($userInfo);
    if(empty($errors))
    {
        saveUserInfo($userInfo);
    }
}
$vars = array('errors'=>$errors);

$smarty = new Smarty();
$smarty->display('lab7add.html');

//buildLayout('signup.html', $vars);

