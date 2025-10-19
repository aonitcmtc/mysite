<?php
  session_start();

  // Clear Session
  session_unset();
  session_destroy();
  unset($_SESSION); 

  header('Location: ../home.php');
  exit;
?>