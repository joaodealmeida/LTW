<?php
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/pools.php');      // loads the functions responsible for the pool table
  
  createPoll($_POST['question'], $_POST['answers']);
  
  header('Location: http://gnomo.fe.up.pt/~ei12053/projecto_final/poll_list.php' . $_SERVER['HTTP_REFERER']);
  
  ?>