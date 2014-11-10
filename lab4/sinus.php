<?php

    require_once("include/sin.inc.php");
    include("templates/head.html");
    echo printSinHeader(6);
    echo getSinTableBody(10, 6);
    include("templates/foot.html");
?>