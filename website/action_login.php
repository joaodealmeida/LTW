<?php
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/users.php');      // loads the functions responsible for the users table
 
  if (userExists($_POST['username'], $_POST['password'])){ // test if user exists
    $_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = sha1($_POST['password']);
	print_r($_SESSION);
		header("Location: index.php");
	}	// store the username
	else 
		 header("Location: login_failed.php");
?>