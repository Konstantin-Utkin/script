<?php

  require_once("include/common.inc.php");

  $people = new People;
  $people = getSurveyFromRequest($people);
  saveSurvayToFile($people);







