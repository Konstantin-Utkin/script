<?php
    require_once ("include/config.inc.php");
    require_once ("include/db.inc.php");
    require_once ("include/view.inc.php");
    require_once ("include/login.inc.php");
    
    function alert($string)
    {
        echo '<script type="text/javascript">alert("' . $string . '");</script>';
    }

    class userInfo
    {
        public $fname = "";
        public $lname = "";
        public $email = "";
        public $remail = "";
        public $password = "";
        public $sex = "";
        public $month = "";
        public $day = 0;
        public $year = 0;
    }

    connectDB();

