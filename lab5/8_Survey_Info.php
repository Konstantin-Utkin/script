<?php

  require_once("include/common.inc.php");

  $email = getEmailFromRequest();
  $people = new People;
  $people = getSurveyFromFile($email, $people);
  printPeopleArray($people);
    






