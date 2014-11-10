<?php

function GetParam($name, $defValue='')
{
    return isset($_GET[$name]) ? $_GET[$name] : $defValue;
}