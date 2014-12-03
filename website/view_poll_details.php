<?php
  session_start(); 
  
  include_once("database/connection.php");
  include_once("database/polls.php");
  include_once("database/users.php");

  $pollInfo = getPollItem($_GET['id']);
  $answersInfo = getPollAnswers($_GET['id']);
  
  
  
  include_once("templates/header.php");  
  include_once("templates/view_poll.php");  
  include_once("templates/footer.php");
?>