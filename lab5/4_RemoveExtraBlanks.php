<?php
    if(isset($_GET['text']))
    {
        $paramText = trim($_GET['text']);
    }
    else
    {
        die("There isn't parameter text!");
    }
    
    $prevChar = "";
    for($i = 0; $i < strlen($paramText); $i++)
    {
        if($paramText[$i] == ' ')
            if($prevChar == ' ')
                continue;
        echo $paramText[$i];
        $prevChar = $paramText[$i];
    }
