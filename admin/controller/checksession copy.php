<?php

checkSession();

  function checkSession() {
    // check Session
    if (empty($_SESSION["user"])) {
      header('Location: ./login.php');
      exit;
    } else {
      // print_r($_SESSION);
      // die();

      if($_SESSION['group'] == 'admin'){
        echo "Go to Admin Page";
        // header('Location: ./admin/page/index.php');
        // exit;
      } else {
        echo "Go to website";

        header('Location: ../../index.php');
        exit;
      }
    }

    // print_r($_COOKIE);
    // die();        
  }
?>