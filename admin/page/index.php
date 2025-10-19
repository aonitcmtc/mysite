<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>phpMonitor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../../asset/bootstrap.min.css" rel="stylesheet">
    <script src="../../asset/bootstrap.bundle.min.js"></script>

    <script src="../../asset/jquery.slim.min.js"></script>
    <script src="../../asset/popper.min.js"></script>

    <!-- <link href="../../asset/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <style>
      body {
        margin: 0;
      }

      .h-nav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        position: fixed;
        overflow: auto;
      }

      .v-ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 20%;
        background-color: #f1f1f1;
        position: fixed;
        top: 50px;
        height: 100%;
        overflow: auto;
      }

      .v-li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }

      .v-li a.active {
        background-color:rgb(99, 160, 239);
        color: white;
      }

      .v-li a:hover:not(.active) {
        background-color: #555;
        color: white;
      }

      .screen {
        /* position: fixed; */
        /* top: 50px; */
        margin-left:20%;
        margin-top:90px;
        /* padding:1px 16px; */
        width: 80%;
        height:756px;
        /* overflow: auto;    */
      }

      .pd-src {
        padding:8px 16px;
      }

      .d-navbar {
        position: fixed;
        top: 0;
        z-index: 999;
        height:632px;
        overflow: auto;
      }

      .dropdown-layout {
        /* position: absolute; */
        z-index: 999;
      }

      .footer {
        /* position: fixed;
        bottom: 0; */
        position: absolute;
        padding: 16px;
        width: 100%;
        height:48px;
        background-color: #555;
      }

      .li-dropdown:active { 
          background-color: red; 
      } 

      .crop-text-nav { 
          overflow:hidden; 
          white-space:nowrap; 
          text-overflow:ellipsis; 
          width:100px; 
      }

      .crop-text-nav-hor { 
          overflow:hidden; 
          white-space:nowrap; 
          text-overflow:ellipsis; 
          width:300px; 
      }

      @media screen and (max-width: 575px) {
        .d-flex {
          margin-bottom: 18px;
        }

        .crop-text-nav-hor { 
          overflow:hidden; 
          white-space:nowrap; 
          text-overflow:ellipsis; 
          width:80px; 
      }
        
      }
    </style>

    <?php
      include '../controller/checkcookie.php';
      include '../controller/checksession.php';

      $page = isset($_GET['page']) ? $_GET['page'] : 'news.php';
      $manu = isset($_GET['manu']) ? $_GET['manu'] : '';
    ?>

    <div class="d-navbar">
      <nav class="navbar navbar-expand-sm navbar-primary bg-primary h-nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../../images/cat.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <span class="">
              <!-- <i class="fa fa-user-o" aria-hidden="true"></i> -->
              <i class="fa fa-list-ul" aria-hidden="true"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">

              <li class="nav-item">
                <a class="nav-link crop-text-nav" href="https://myinvest-app.online/" target="blank">My Invest</a>
              </li>
              <li class="nav-item">
                <a class="nav-link crop-text-nav" href="http://myexpress-api.click/" target="blank">Express api</a>
              </li>
              <li class="nav-item">
                <a class="nav-link crop-text-nav" href="https://dash.cloudflare.com/" target="blank">Cloudflare</a>
              </li>
              <li class="nav-item">
                <a class="nav-link crop-text-nav" href="https://hpanel.hostinger.com/" target="blank">Hostinger</a>
              </li>
              <li class="nav-item">
                <a class="nav-link crop-text-nav" href="../../public/" target="blank">PublicPage</a>
              </li>
            </ul>
            <!-- https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/configure-tunnels/local-management/as-a-service/linux/ -->
            <form class="d-flex">
              <!-- <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button> -->
              <hr>
              <a href="../../controller/logoutController.php">
                <button class="btn btn-danger mx-2" type="button">Logout</button>
              </a>
            </form>
          </div>
        </div>
      </nav>

    </div>

    <ul class="v-ul">
      <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'home.php' ? 'active':''; ?>" href="?page=home.php">Home</a></li>
      <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'uploadFiles.php' ? 'active':''; ?>" href="?page=uploadFiles.php">uploadFiles</a></li>
      <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'uploadBigFiles.php' ? 'active':''; ?>" href="?page=uploadBigFiles.php">upload BigFiles</a></li>
      <!-- <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'add_md5.php' ? 'active':''; ?>" href="?page=add_md5.php">md5</a></li> -->
      <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'calcpi.php' ? 'active':''; ?>" href="?page=calcpi.php">Calcpi</a></li>

      <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'texteditor.php' ? 'active':''; ?>" href="?page=texteditor.php">TextBox Editor</a></li>
      <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'address.php' ? 'active':''; ?>" href="?page=address.php">Address</a></li>

      <li class="v-li">
        <a id="li_bootstrapExample" class="crop-text-nav-hor <?= $manu == 'bootstrapExample' ? 'active bg-secondary':''?>" data-bs-toggle="collapse" data-bs-target="#bootstrapExample" aria-expanded="false" aria-controls="bootstrapExample">
          <i id="icon_bootstrapExample" 
            class="fa <?= $manu == 'bootstrapExample' ? 'fa-chevron-down':'fa-chevron-right'?>" aria-hidden="true">
          </i>
          bootstrapExample 5.3.3
        </a>
      </li>
      <div class="<?= $manu == 'bootstrapExample' ? '' : 'collapse'?>" id="bootstrapExample">
        <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'table.php' ? 'active':''; ?>" href="?manu=bootstrapExample&page=table.php">table</a></li>
        <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'carousel.php' ? 'active':''; ?>" href="?manu=bootstrapExample&page=carousel.php">carousel</a></li>
        <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'calendar.php' ? 'active':''; ?>" href="?page=calendar.php">calendar</a></li>
        <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'video.php' ? 'active':''; ?>" href="?page=video.php">video</a></li>
      </div>

      <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'plan.php' ? 'active':''; ?>" href="?page=plan.php">Plan</a></li>
      <li class="v-li"><a class="crop-text-nav-hor <?= $page == 'abount.php' ? 'active':''; ?>" href="?page=abount.php">About</a></li>
    </ul>     

    <div id="render_screen" class="screen">
      <?php if ($manu == 'bootstrapExample') :?>
        <?php include './bootstrapExample/'.$page ?>
      <?php else :?>
        <?php include $page ?>
      <?php endif;?>
    </div>

    <!-- <div id="footer" class="footer bg-secondary">
      <?php include 'footer.php' ?>
    </div> -->

    <script>
      $(document).ready(function(){
        $("#li_bootstrapExample").click(function(){
          var isExpanded = $('#li_bootstrapExample').hasClass('collapsed')
          // console.log(isExpanded);
          if (!isExpanded) {
            $("#icon_bootstrapExample").removeClass("fa-chevron-right");
            $("#icon_bootstrapExample").addClass("fa-chevron-down");
          } else {
            $("#icon_bootstrapExample").removeClass("fa-chevron-down");
            $("#icon_bootstrapExample").addClass("fa-chevron-right");
          }
        });

        // console.log($('#li_bootstrapExample').hasClass('active'))
        // $('li.menu').hasClass('active');

        // console.log('hello');
      });
    </script>

  </body>
</html>
