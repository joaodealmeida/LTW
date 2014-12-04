<?php
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/polls.php');     
  // loads the functions responsible for the pool table
   $question = $_REQUEST['question'];
   $answers = $_REQUEST['answers'];
   
   
  //print_r($_POST['answers']);
  createPoll($question,1, $answers);
  
  //header("Location: list_polls.php");
  
  ?>