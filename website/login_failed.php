<?php
  session_start(); 
  
  include_once("database/connection.php");
  include_once("database/polls.php");
  
  include_once("templates/header.php");  
  include_once("templates/login_failed.php");  
  include_once("templates/footer.php");
?>