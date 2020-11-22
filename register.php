<?php
  // Create database connection
session_start();

require('config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['fname'])) {
  	// Get image name

  	// Get text
  	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
  	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
  	$email = mysqli_real_escape_string($conn, $_POST['email']);
  	$password = $_POST['password'];
  	$country = $_POST['country'];
  	$ssn = $_POST['ssn'];
  	$phone = $_POST['phone'];
  	$address = $_POST['address'];
  	
  	$frontid = $_FILES['idpic']['name'];
  	$temp = explode(".",  $_FILES["idpic"]["name"]);
  	$frontid = 'FRONTID-'.$phone.'.' . end($temp);
  	
  	
  	$backid = $_FILES['idpic2']['name'];
  	$temp2 = explode(".",  $_FILES["idpic2"]["name"]);
  	$backid = 'BACKID-'.$phone.'.' . end($temp2);
  	
  	$selfie = $_FILES['idpic3']['name'];
  	$temp3 = explode(".",  $_FILES["idpic3"]["name"]);
  	$selfie = 'SELFIE-'.$phone.'.' . end($temp3);
  	

  	// image file directory
  	$fronttarget = "frontimages/".basename($frontid);
  	$backtarget = "backimages/".basename($backid);
  	$selfietarget = "selfieimages/".basename($selfie);
  	
  	$queryfunds = "SELECT * FROM user WHERE email = '$email'";
 $resultfunds = mysqli_query($conn, $queryfunds) or die(mysql_error());
 
 if ($resultfunds->num_rows <= 0){

  	$sql = "INSERT INTO user (fname, lname, email, password, country, ssn, phone, frontid, backid, address, selfie) VALUES ('$fname', '$lname', '$email', '$password', '$country', '$ssn', '$phone', '$frontid', '$backid', '$address', '$selfie')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['idpic']['tmp_name'], $fronttarget) && move_uploaded_file($_FILES['idpic2']['tmp_name'], $backtarget) && move_uploaded_file($_FILES['idpic3']['tmp_name'], $selfietarget)) {
  	    header( "refresh:5;url=Dashboard/dashboard-home.php" );
  	    
  	    $_SESSION['id'] = $conn -> insert_id;
  	    $_SESSION['email'] = $email;
  	    $_SESSION['uname'] = $fname;
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Afrique Bank - Register.</title>
  </head>
  <body style="background-color:white" class=" text-center">
      <div class="continer text-center">
      <i class="fa fa-check fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Account Successfully created.</h1>
      <p>You will receive a welcome email from us, please check spam box. You will be redirected to the dashboard</p>
      </div>
    <!--<h1>Hello, world!</h1>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  	}else{
  	    header( "refresh:5;url=register.html" );
  	    ?>
  	    
  	    
  	<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Afrique Bank - Register.</title>
  </head>
  <body style="background-color:white" class="text-center">
      <div class="continer text-center">
      <i class="fa fa-exclamation-triangle fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Account Creation Error</h1>
      <p>Please go back and fill the form properly</p>
      </div>
    <!--<h1>Hello, world!</h1>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  	}
  	
  }
      else{
          
  	    header( "refresh:5;url=register.html" );
  	    ?>
  	    
  	    
  	<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Afrique Bank - Register.</title>
  </head>
  <body style="background-color:white" class="text-center">
      <div class="continer text-center">
      <i class="fa fa-exclamation-triangle fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Account Creation Error</h1>
      <p>Email Already exists</p>
      </div>
    <!--<h1>Hello, world!</h1>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  	
      }
  }
  
  if(isset($_POST['email2'])){

        // removes backslashes
 $email = stripslashes($_REQUEST['email2']);
        //escapes special characters in a string
 $email = mysqli_real_escape_string($conn,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($conn,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `user` WHERE email='$email'
and password='$password'";
 $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);
 $rowdata = mysqli_fetch_assoc($result);
        if($rows==1){
     $_SESSION['uname'] = $rowdata['fname'];
     $_SESSION['id'] = $rowdata['id'];
            // Redirect user to index.php
     header( "refresh:5;url=Dashboard/dashboard-home.php" );
     ?>
      <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Afrique Bank - Login.</title>
  </head>
  <body style="background-color:white" class="text-center">
      <div class="continer text-center">
      <i class="fa fa-check fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Account Logged In Successfully.</h1>
      <p>You will be redirected to the dashboard</p>
      </div>
    <!--<h1>Hello, world!</h1>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
         }else{
  header( "refresh:5;url=login.html" );
  	    ?>
  	      	<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Afrique Bank - Login.</title>
  </head>
  <body style="background-color:white" class="text-center">
      <div class="continer text-center">
      <i class="fa fa-exclamation-triangle fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Account Login Error</h1>
      <p>Please go back and fill the form properly</p>
      </div>
    <!--<h1>Hello, world!</h1>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
  	    <?php
 }

  }
//   $result = mysqli_query($db, "SELECT * FROM images");
?>