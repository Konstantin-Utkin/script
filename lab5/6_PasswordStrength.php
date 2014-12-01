<?php
    require_once("include/strength.inc.php");
    $password = isset($_GET['password']) ? trim($_GET['password']) : '';
    $strength = calcPasswordSrength($password);
    echo $strength;