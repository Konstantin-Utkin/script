<?php
  require_once("include/common.inc.php");

  function getEmailFromRequest()
  {
    if(isset($_GET['email']))
    {
      $email = trim($_GET['email']);
    }
    return $email;
  }

  function getSurveyFromRequest($people)
  {
    
    if(isset($_GET['first_name']))
    {
      $people->first_name = trim($_GET['first_name']);
    }
    if(isset($_GET['last_name']))
    {
      $people->last_name = trim($_GET['last_name']);
    }
    if(isset($_GET['email']))
    {
      $people->email = trim($_GET['email']);
    }
    if(isset($_GET['age']))
    {
      $people->age = trim($_GET['age']);
    }
    return $people;
  }

  function printPeopleArray($people)
  {
    echo "First name: ".$people->first_name."</br>";
    echo "Last name: ".$people->last_name."</br>";
    echo "Email: ".$people->email."</br>";
    echo "Age: ".$people->age."</br>";
  }
