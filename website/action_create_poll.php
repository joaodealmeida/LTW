<?php
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/polls.php');      // loads the functions responsible for the pool table
  include_once('database/users.php);
  
  header("Location: list_polls.php");
  
  ?>