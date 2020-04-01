<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Mukul-Profile/Login</title>
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
          <img src="img/pass.jpg" alt="">
      </div>    
      <div class="blog-post-info">
              <h1 class="blog-post-title">Forgot Password?</h1>
              <p class="blog-post-text">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
              <!-- <a href="#" class="blog-post-cta">Read more</a> -->
              <form class="user" name="signup" id="signup" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="form-group">
              <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
              </div>
              <button name="btn-login" id="btn-login" class="btn btn-user btn-block">Enter</button>
              </form>
              <br>
              <div class="text-center">
              <a class="small" href="login.php">Already have an account? Login!</a>>
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
