<?php
session_start();
if(isset($_POST['login'])){

  $password = $_POST['password'];
   if($password === 'fuckedbyowner'){
     $_SESSION['login'] = true; header('LOCATION:../index.php'); die();
   } {
     echo "<div class='alert alert-danger'>IF PASSWORD WORNG THEN CONTACT TO @ownerb3</div>";
   }

 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>X-FORCE Checker</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<center>
        <div class="wrapper">
    <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
      <div class="card shadow-n
      one bg-transparent">
        <div class="card-body p-md-5 text-center">
          <h2 class="text-white">X-FORCE RATE LIMIT BYPASS CHECKER </h2>
          <h5 class="text-white">CONTACT @GovermentOfAmerica TO GET PASS </h5>
          <div class="">
            <img src="assets/images/god.png" class="mt-5" width="120" alt="" />
          </div>
          <p class="mt-2 text-white">LOGIN TO X-FORCE RATE LIMIT BYPASS CHECKER</p><br>
          <form method="POST" id="signup-form" class="signup-form">
            <div class="form-group">
              <input type="password" class="btn btn-light" name="password" id="password"
                placeholder="Password" />
              <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div></br>

            <div class="form-group">
              <input type="submit" name="login" id="login" class="btn btn-light" value="LOGIN" />
            </div>
          </form>
        </div>
      </div>
    </div>
   </div>
  </div>
 </div>
</div>
</center>
</body>
</html>