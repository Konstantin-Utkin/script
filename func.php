<?php
     
    function printInfo($info)
    {
        $data = "<label>Name:</label>".
                "<strong>".$info["name"]."</strong>"."<br>";
        print_r($data);
    }
    
    