<?php
  session_start(); 
  
  include_once("database/connection.php");
  include_once("database/polls.php");

  $result = getAllPolls();
  
  include_once("templates/header.php");  
  include_once("templates/list_polls.php");  
  include_once("templates/footer.php");
?>