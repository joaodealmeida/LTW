
<?php
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/users.php');      // loads the functions responsible for the users table
  
  createUser($_POST['username'], $_POST['password']);
  
  header('Location: http://gnomo.fe.up.pt/~ei12053/projecto_final/index.html' . $_SERVER['HTTP_REFERER']);
  
  ?>