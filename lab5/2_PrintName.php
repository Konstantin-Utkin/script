<?php
    if(isset($_GET['name']))
    {
        $paramName = trim($_GET['name']);
    }
    else
    {
        die("There isn't name!");
    }
    
    echo "Hello, Dear {$paramName}!";