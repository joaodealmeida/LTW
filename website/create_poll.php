<?php
  session_start(); 
  
  
  include_once("database/connection.php");
  
  if( !(isset($_SESSION['username'])) || !(isset($_SESSION['password'])) )
		header("Location: register.php");
		
	
  include_once("database/polls.php");
  include_once("templates/header.php");  
  include_once("templates/create_poll.php");  
  include_once("templates/footer.php");
?>