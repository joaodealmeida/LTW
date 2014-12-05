<?php
  session_start(); 
  
  include_once("database/connection.php");
  include_once("database/polls.php");
  include_once("database/users.php");
  
   $word = $_GET['word'];

  $result = getSearchPoll($word);
  
  include_once("templates/header.php");  
  include_once("templates/list_polls.php");  
  include_once("templates/footer.php");
?>