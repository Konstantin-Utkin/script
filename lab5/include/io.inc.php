<?php
    require_once("include/common.inc.php");

    function printManClass($Man)
    {
        echo "First name: " . $Man->first_name . "</br>";
        echo "Last name: " . $Man->last_name . "</br>";
        echo "Email: " . $Man->email . "</br>";
        echo "Age: " . $Man->age . "</br>";
    }
