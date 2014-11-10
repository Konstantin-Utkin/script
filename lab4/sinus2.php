<?php
    require_once("include/sin.inc.php");
    require_once("include/request.inc.php");
    include("templates/head.html");
    $minutes = GetParam("minutes", 6);
    $degrees = GetParam("degrees", 10);
    echo printSinHeader($minutes);
    echo getSinTableBody($degrees, $minutes);
    include("templates/foot.html");
?>