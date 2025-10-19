<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="./asset/bootstrap462.min.css" rel="stylesheet">
  <script src="./asset/jquery.slim.min.js"></script>
  <script src="./asset/popper.min.js"></script>
  <script src="./asset/bootstrap.bundle.min.js"></script>

  <!-- cookieconsent -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.1.0/dist/cookieconsent.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-end">
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
        <form action="controller/loginController.php" method="POST" class="was-validated">
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
          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <a href="register.php">
            <button class="btn btn-outline-primary btn-block mt-2" type="button">Register</button>
          </a>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- <script type="module" src="cookieconsent-config.js"></script> -->
<script type="module" src="./asset/iscookie/cookieconsent-config.js"></script>
<!-- <script type="module" src="/asset/"></script> -->

</body>
</html>
