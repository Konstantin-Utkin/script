<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "maindb");

    function connectDB()
    {
        global $g_DBlink;
        $g_DBlink = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if(mysqli_connect_errno())
        {
            echo("Unable to connect to DB: ".mysqli_connect_error());
            exit();
        }
    else
        echo("ok");
    }
  
    connectDB();
