<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./asset/bootstrap462.min.css" rel="stylesheet">
  <script src="./asset/jquery.slim.min.js"></script>
  <script src="./asset/popper.min.js"></script>
  <script src="./asset/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">

    <div class="col-12">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark h-nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <!-- <img src="images/user.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">  -->
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <span class="">
              <!-- <i class="fa fa-user-o" aria-hidden="true"></i> -->
              <i class="fa fa-list-ul" aria-hidden="true"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse col-4" id="mynavbar">
            <!-- <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Decode MD5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.google.com/" target="blank">Google</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://myinvest-app.online/" target="blank">My Invest</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://myexpress-api.click/" target="blank">Express api</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://dash.cloudflare.com/" target="blank">Cloudflare</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://hpanel.hostinger.com/" target="blank">Hostinger</a>
              </li>
            </ul> -->
            <!-- https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/configure-tunnels/local-management/as-a-service/linux/ -->
            <form class="d-flex col-12 text-right">
              <!-- <input class="form-control me-2" type="text" placeholder="Search"> -->
              <div class="col-6">
                <a href="register.php">
                  <button class="btn btn-primary btn-block" type="button">Register</button>
                </a>
              </div>
              <div class="col-6">
                <a href="login.php">
                  <button class="btn btn-success btn-block" type="button">Login</button>
                </a>
              </div>
            </form>
          </div>
        </div>
      </nav>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="my-3 text-center">
        <h2>Login to Page</h2>
      </div>

      <div class="row">
        <div class="col-12 text-center my-3">
          <img src="https://gratisography.com/wp-content/uploads/2024/01/gratisography-cyber-kitty-800x525.jpg" 
            class="rounded-circle" alt="image Profile" width="160" height="160">
        </div>
      </div>
      <!-- <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p> -->
      <div class="my-3">
        <form action="/action_page.php" class="was-validated">
          <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            <!-- <div class="valid-feedback">Valid.</div> -->
            <div class="invalid-feedback">กรุณากรอก Username</div>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
            <!-- <div class="valid-feedback">Valid.</div> -->
            <div class="invalid-feedback">กรุณากรอก Password</div>
          </div>
          <!-- <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div> -->
          <button type="submit" class="btn btn-primary">Login</button>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
