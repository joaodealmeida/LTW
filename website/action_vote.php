
<?php

		
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/users.php');      // loads the functions responsible for the users table
  include_once('database/polls.php');

  $user = getUserInfo($_SESSION['username']);
 
  voteOnPoll($_POST['poll_id'], $user[0]['id'], $_POST['answer_id']);

  header("Location: view_poll_details.php?id={$_POST['poll_id']}");
  

  
  ?>