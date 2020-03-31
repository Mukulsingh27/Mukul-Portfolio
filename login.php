<?php require "config/config.php"; ?>
<?php
session_start();

   if(!isset($_SESSION['is_login'])){
   if(isset($_POST['btn-login'])){
       $email = mysqli_real_escape_string($con,trim($_POST['email']));
    // $username = mysqli_real_escape_string($con,trim($_POST['username']));
       $password = mysqli_real_escape_string($con,md5(trim($_POST['password'])));
      if(isset($_POST['customCheck'])){
        $re = 'on';
      }else{
        $re = '';
      }
       

       $query = "SELECT * FROM portfolio WHERE email='$email' AND password = '$password'";
       $fire = mysqli_query($con, $query);

       $query1 = "SELECT fullname FROM portfolio WHERE email='$email' AND password = '$password'";
       $fire1 = mysqli_query($con,$query1) or die ("cannot fetch data from database".mysqli_error($con)); 
       $users = mysqli_fetch_assoc($fire1);

    //    if($fire) echo mysqli_num_rows($fire). " row found";
    if($fire){
        if(mysqli_num_rows($fire) == 1){
            if($re == 'on'){
              setcookie("emai",$email,time() + (86400 * 10));
            }
            $_SESSION['is_login'] = true;
           $_SESSION['fullname']= $users['fullname'];
            // $_SESSION['username'] = $username;
            // echo "Welcome " .$users['fullname'];
            header("Location:dashboard.php");
        }else{
            echo "Invalid Credentials";
        }
    }
   }
}else { header("Location:dashboard.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <!-- <?php $_SERVER['PHP_SELF'] ?> -->
                  <form class="user" name="signup" id="signup" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="customCheck" value="on">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                      Login
                    </a> -->
                    <button name="btn-login" id="btn-login" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="signup.php">Create an Account!</a>
                  </div>
                  <br>
                  <div class="text-center">
                  <a class="small" href="index.php">
                  <button name="btn-login" class="btn btn-primary btn-user ">Home Page </button>
                  </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>
