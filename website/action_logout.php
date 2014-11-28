<?php
  session_start();
  session_destroy();
 
  header('Location: http://gnomo.fe.up.pt/~ei12053/projecto_final/index.html' . $_SERVER['HTTP_REFERER']);
?>
