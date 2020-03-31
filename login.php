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
<html lang="zxx">
<head>
	<title>Mukul - Profile</title>
	<meta charset="UTF-8">
	<meta name="description" content="Portfolio about Mukul">
	<link rel="shortcut icon" type="image/png" href="img/M.jfif">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/accordion.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif] -->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<?php include "nav.php"; ?>
    <!-- Offcanvas Menu Section end -->
<div class="container">  
    <div class="blog-main">  
<div class="blog-post">
      <div class="blog-post-img">
          <img src="img/login.jfif" alt="">
      </div>    
      <div class="blog-post-info">
              <h1 class="blog-post-title"> Login </h1>
              <p class="blog-post-text"> we don't share password with anyone</p>
              <!-- <a href="#" class="blog-post-cta">Read more</a> -->
              <form class="user" name="signup" id="signup" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="form-group">
              <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
              </div>
              <div class="form-group">
              <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
              </div>
              <input type="checkbox" id="customCheck" name="customCheck" value="on">
                <label for="customCheck" class="custom-chechbox">Remember Me</label>
              <button name="btn-login" id="btn-login" class="btn btn-user btn-block">Login</button>
              </form>
              <br>
              <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="signup.php">Create an Account!</a>
                  </div>
                  <br>
                  <div class="text-center">
                  <a class="small" href="index.php">
                  <button name="btn-login" class="btn btn-user">Home Page </button>
                  </a>

      </div>
</div>
    </div>
</div>



    	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/pana-accordion.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
