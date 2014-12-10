<?php
  require_once("include/sin.inc.php");
  require_once("include/request.inc.php");
  include("templates/head.html");
  $minute_default = 6;
  $degree_default = 10;
  $minutes = intval(GetParam("minutes", $minute_default));
  if ($minutes<1 || $minutes>=60)
  {
    echo "Minutes=".$minutes." is not valid issue. Set default value ".$minute_default;
    $minutes=$minute_default;
  }
  $degrees = GetParam("degrees", $degree_default);
  if ($degrees<1 || $degrees>=360)
  {
    echo "</br>Degrees=".$degrees." is not valid issue. Set default value ".$degree_default;
    $degrees=$degree_default;
  }

  echo printSinHeader($minutes);
  echo getSinTableBody($degrees, $minutes);
  include("templates/foot.html");
?>