<?php
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
    header("Location: list_polls.php");
    die;
  }
  
  include_once("database/connection.php");
  include_once("database/polls.php");
  include_once("database/answers.php");

  $item = getPollsItem($_GET['id']);
  $comments = getPollAnswers($_GET['id']);
  
  if (!$item) die();
  
  include_once("templates/header.php");  
  include_once("templates/edit_pools.php");  
  include_once("templates/footer.php");  
?>
