<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mukul's Database</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li class="active"><a href="signup.php">Signup</a></li>
      <?php
          if(isset($_SESSION['is_login'])){ ?>
              <li><a href="#"><?php echo $_SESSION['fullname'] ?></a></li>
       <?php } else { ?>
      <li><a href="login.php">Login</a></li>
      
      <li><a href="database.php">Show database</a></li>
       <?php } ?>
    </ul>
  </div>
</nav>