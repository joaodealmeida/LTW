<?php
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/polls.php'); 
  include_once('database/users.php'); 
  
  // loads the functions responsible for the pool table
   $question = $_REQUEST['question'];
   $image = $_REQUEST['image'];
   $answers = $_REQUEST['answers'];
   
   $user = getUserInfo($_SESSION['username']);
   
 
  //print_r($_POST['answers']);
  if(createPoll($question, $user[0]['id'], $answers, $image))
	header("Location: list_polls.php");
  else
	{
		echo 'Invalid question/answer.Try again';
		header("Location: create_poll.php");
	}
  
  ?>