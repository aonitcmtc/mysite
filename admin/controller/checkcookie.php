<?php

  checkCookieTimeout ();

  function checkCookieTimeout() {
    if(!isset($_COOKIE['member'])) {
        echo "Cookie named 'member' is not set!";

        // remove all session variables
        session_unset();
        session_destroy();

        header('Location: ../../login.php');
        exit;
    } else {
        // echo "Cookie 'member' is set!<br>";
        // echo "Value is: " . $_COOKIE['member'];
    }  

    // print_r($_COOKIE);
    // die();        
  }
?>