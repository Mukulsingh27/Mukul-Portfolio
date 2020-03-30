<?php require "config.php"; ?>

<?php
 if((isset($_POST['submit']))){
    // $fullname = strip_tags($_POST['fullname']);
    $fullname = mysqli_real_escape_string($con,trim($_POST['fullname']));
    // $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,trim($_POST['email']));
    // $username = $_POST['username'];
    $username = mysqli_real_escape_string($con,trim($_POST['username']));
    // $password = md5($_POST['password']);
    $password = mysqli_real_escape_string($con,trim($_POST['password']));
    $phone = mysqli_real_escape_string($con,trim($_POST['phone']));

    $fullname_valid = $email_valid = $password_valid = $username_valid = $phone_valid = false;
   
   
    //fullname check
    if(!empty($fullname)){
        if(strlen($fullname) > 2 && strlen($fullname) <=25){
            $fullname_valid = true;
            // echo "Fullname is OK !! <br>";
        }else{ echo "Fullname can only lie between 2 to 25 chars only ! <br>"; } 
    }else{ echo "Fullname cannot be blank ! <br>" ;}

    // email check
    if(!empty($email)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //all test clear
            $email_valid = true;
            // echo "Email is OK !! <br>";
        }else{ echo "is an Invalid Email address. <br> ";}
    }else { echo "Email cannot be blank ! <br>";}

    //username check 
    if(!empty($username)){
        if(strlen($username) > 2 && strlen($username) <=15){
            //all test clear
            $username_valid = true;
            // echo "Username is OK !! <br>";
        }else{ echo "Username can only lie between 2 to 15 chars only ! <br>"; } 
    }else{ echo "Username cannot be blank ! <br>" ;}

    //phonenumber check 
    if(!empty($phone)){
        if(strlen($phone)==10){
            //all test clear
            $phone_valid = true;
            // echo "Username is OK !! <br>";
        }else{ echo "Phone Number should be of 10 digits ! <br>"; } 
    }else{ echo "Phone Number cannot be blank ! <br>" ;}

    //password check
    if(!empty($password)){
        if(strlen($password) > 5 && strlen($password) <=15){
            //all test pass
            $password_valid = true;
            $password = md5($password);
            // echo "Password is OK !! <br>";
        }else{echo $password." = password must be between 5 to 15 <br>";}
    }else {echo "Password cannot be blank ! <br>"; }

    if($fullname_valid && $phone_valid && $email_valid && $username_valid && $password_valid){
        $query = "INSERT INTO portfolio(id,fullname,email,phonenumber,username,password) VALUES('','$fullname','$email','$phone','$username','$password')";
  
        $fire = mysqli_query($con,$query) or die ("cannot insert data into database.".mysqli_error($con));
      
        if($fire) echo "Data inserted successfully in database.";
    }
}


?>

   <!--delete code here -->
<?php
         if(isset($_GET['del'])){
             $id= $_GET['del'];
             $query = "DELETE FROM users WHERE id = $id";
             $fire = mysqli_query($con,$query)or die ("cannot delete it from database.".mysqli_error($con));
         if($fire) echo "data deleted successfully";
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>successful</title>
</head>
<body>
<a href="../signup.php">
        <button name="main" id="main" class="btn btn-primary btn-block">Main Menu</button>
        </a>
</body>
</html>