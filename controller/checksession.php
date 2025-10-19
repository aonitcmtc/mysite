<?php

checkSession();

  function checkSession() {
    // check Session
    if (empty($_SESSION["user"])) {
      header('Location: ./home.php');
      exit;
    } else {
      // print_r($_SESSION);
      // die();

      if($_SESSION['group'] == 'admin'){

        header('Location: ./admin/page/index.php');
        exit;
      } else {

        echo "Go to website";
      }
    }

    // print_r($_COOKIE);
    // die();        
  }
?>