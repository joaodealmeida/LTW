<?php
  session_start(); 
  
  include_once("database/connection.php");
  include_once("database/polls.php");
  include_once("database/comments.php");

  $item = getPollItem($_GET['id']);
  $comments = getPollAnswers($_GET['id']);
  
  if (!$item) die();
  
  include_once("templates/header.php");  
  include_once("templates/view_polls.php");  
  include_once("templates/list_comments.php");  
  include_once("templates/footer.php");  
?>