<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="./asset/bootstrap462.min.css" rel="stylesheet">
  <script src="./asset/jquery.slim.min.js"></script>
  <script src="./asset/popper.min.js"></script>
  <script src="./asset/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row justify-content-end">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="my-3 text-center">
        <h2>Register to Page</h2>
      </div>

      <div class="row  <?= $_GET['status'] == 'false' ? 'visible' : 'invisible'?>">
        <div class="col-12 text-center">
          <!-- <img src="https://gratisography.com/wp-content/uploads/2024/01/gratisography-cyber-kitty-800x525.jpg" 
            class="rounded-circle" alt="image Profile" width="160" height="160"> -->
            <div class="alert alert-danger" role="alert">
              ไม่สามารถบันทึกข้อมูลของท่านได้!
            </div>
        </div>
      </div>
      <!-- <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p> -->
      <div class="my-2">
        <form action="controller/registerController.php" method="GET" class="was-validated">
          <div class="form-group">
            <label for="firstname">ชื่อ:</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter username" name="firstname" required>
            <!-- <div class="valid-feedback">Valid.</div> -->
            <div class="invalid-feedback">กรุณากรอก ชื่อ</div>
          </div>
          <div class="form-group">
            <label for="lastname">นามสกุล:</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter username" name="lastname" required>
            <!-- <div class="valid-feedback">Valid.</div> -->
            <div class="invalid-feedback">กรุณากรอก นามสกุล</div>
          </div>
          <div class="form-group">
            <label for="birthday">วันเกิด:</label>
            <input type="date" class="form-control" id="birthday" placeholder="Enter username" name="birthday" required>
            <!-- <div class="valid-feedback">Valid.</div> -->
            <div class="invalid-feedback">กรุณากรอก วันเกิด</div>
          </div>
          <div class="form-check form-check-inline">
            <div class="">
              <label for="sex">เพศ:</label>
              <hr>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="sexman" value="1" checked>
              <label for="sexman">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="sexfemale" value="2">
              <label for="sexfemale">หญิง</label>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
            <!-- <div class="valid-feedback">Valid.</div> -->
            <div class="invalid-feedback">กรุณากรอก Email</div>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            <!-- <div class="valid-feedback">Valid.</div> -->
            <div class="invalid-feedback">กรุณากรอก Password</div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">ตกลง</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
