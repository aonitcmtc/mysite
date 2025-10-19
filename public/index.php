<!DOCTYPE html>
<html lang="en">
<head>
    <title>Public Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../asset/bootstrap.min.css" rel="stylesheet">
    <script src="../asset/bootstrap.bundle.min.js"></script>

    <script src="../asset/jquery.slim.min.js"></script>
    <script src="../asset/popper.min.js"></script>

    <!-- <link href="../../asset/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- [
    xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
] -->
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
        /* position: fixed;
        top: 50px; */
        /* margin-left:20%; */
        /* padding:1px 16px; */
        width: 100%;
        height: 768px;
        /* overflow: auto;    */
        margin-top: 50px;
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
        /* position: fixed; */
        /* bottom: 0; */
        padding: 16px;
        width: 100%;
        height:48px;
        background-color: #555;
        margin-top: 30px;
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

      .carousel-inner img {
        height: 768px;
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

<div class="d-navbar">
    <nav class="navbar navbar-expand-sm navbar-warning bg-warning h-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <!-- <img src="../../images/cat.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">  -->
         Public
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
            <a class="nav-link crop-text-nav" href="https://www.google.com/" target="blank">Google</a>
            </li>
            <li class="nav-item">
            <a class="nav-link crop-text-nav" href="https://www.youtube.com/" target="blank">Youtube</a>
            </li>
            <li class="nav-item">
            <a class="nav-link crop-text-nav" href="https://th.tradingview.com/" target="blank">Tradingview</a>
            </li>
            <li class="nav-item">
            <a class="nav-link crop-text-nav" href="https://www.investing.com/" target="blank">Investing</a>
            </li>
        </ul>
        <!-- https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/configure-tunnels/local-management/as-a-service/linux/ -->
        <!-- <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
            <hr>
            <a href="../../controller/logoutController.php">
            <button class="btn btn-danger btn-sm mx-2" type="button">Logout</button>
            </a>
        </form> -->
        </div>
    </div>
    </nav>

</div>

<div id="render_screen" class="screen">
    <!-- <div class="container"> -->
        <div class="row justify-content-end">
            <div class="col-12">
            <div class="my-3 text-center">
                <h2>Public Page</h2>
            </div>

                <div class="row">
                    <div class="col-12 text-center my-3">

                        <div id="carouselDark" class="carousel carousel-light slide">
                        <!-- <div id="carouselDark" class="carousel carousel-dark slide"> -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                            <img src="https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://st3.depositphotos.com/1583474/15324/i/450/depositphotos_153242738-stock-photo-rose-on-black-background.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="https://i0.wp.com/picjumbo.com/wp-content/uploads/violet-colorful-sunset-sky-on-the-beach-free-photo.jpeg?w=600&quality=80" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    <!-- </div> -->

    <!-- footer -->
    <div id="footer" class="footer bg-warning">
        <?php include 'footer.php' ?>
    </div>
</div>

</body>
</html>
