<?php
    require_once("include/config.inc.php");
    require_once("include/db.inc.php");
    require_once("include/view.inc.php");
    require_once("include/table_login.inc.php");
    require_once("include/request.inc.php");
    require_once(SMARTY_DIR . 'Smarty.class.php');
    require_once("classes/UserInfo.php");

    
    connectDB();