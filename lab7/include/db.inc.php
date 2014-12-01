<?php
    $g_DBlink = null;

    function connectDB()
    {
        global $g_DBlink;
        $g_DBlink = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if(mysqli_connect_errno())
        {
            echo("Unable to connect to DB: ".mysqli_connect_error());
            exit();
        }
    }

    function queryDB($query)
    {
        global $g_DBlink;
        $data = array();
        if($result = mysqli_query($g_DBlink, $query))
        {
            while($row = mysqli_fetch_assoc($result))
            {
                array_push($data, $row);
            }    
        }
        mysqli_free_result($result);
        return $data;
    }
    
    function insertDB($query)
    {
        global $g_DBlink;
        $g_DBlink->autocommit(FALSE);
        $result = mysqli_query($g_DBlink, $query);
        $g_DBlink->commit();
        return $result;
    }

 
    function quoteDB($param)
    {
        global $g_DBlink;
        return mysqli_real_escape_string($g_DBlink, $param);
    }
    
