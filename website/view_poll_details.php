<?php
  session_start(); 
  
  include_once("database/connection.php");
  include_once("database/polls.php");
  include_once("database/users.php");

  $pollInfo = getPollItem($_GET['id']);
  $answersInfo = getPollAnswers($_GET['id']);
  
	if( !(isset($_SESSION['username'])) || !(isset($_SESSION['password'])) )
		header("Location: register.php");
	
  $user = getUserInfo($_SESSION['username']);
  
  include_once("templates/header.php");  
  
  if(checkIfUserVotedAlready($_GET['id'],$user[0]['id']))
	include_once("templates/view_poll_details.php");
  else
	include_once("templates/view_poll.php");
	
  include_once("templates/footer.php");
?>