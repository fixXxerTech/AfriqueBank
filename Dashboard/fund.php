<?php
session_start();

require('config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['plan'])) {
    
    
    $adminsql = "SELECT * from admintbl";
     $adminresult = mysqli_query($conn,$adminsql) or die(mysqli_error($conn));
//  $adminrows = mysqli_num_rows($adminsql);
 $adminrowdata = mysqli_fetch_assoc($adminresult);
 
 $btcaddr = $adminrowdata['btcaddr'];
  $paypal = $adminrowdata['paypal'];
 
 
$userid = $_POST['userid'];
$plan = $_POST['plan'];
$option = $_POST['option'];
$amount = $_POST['amount'];
$payment = $_POST['payment'];
$withdrawal_address = $_POST['withdrawal_address'];
$prcnt_increase;
$pending = 'pending';

if($plan == 'beginners'){
    $prcnt_increase = '1.5';    
}elseif( $plan == 'standard'){
    $prcnt_increase = '2';
}elseif($plan == 'advanced'){
    $prcnt_increase = '2.5';
}else{
    $prcnt_increase = '3';
}

// echo $userid .'<br>';
// echo $plan .'<br>';
// echo $option .'<br>';
// echo $amount .'<br>';
// echo $payment .'<br>';
// echo $withdrawal_address .'<br>';
// echo $prcnt_increase .'<br>';
// echo $pending .'<br>';


  	$sql = "INSERT INTO funds (userid, plan, investoption, amount, profit, withdrawal, prcnt, payment, status) VALUES ('$userid', '$plan', '$option', '$amount', '$amount', '$withdrawal_address', '$prcnt_increase', '$payment', '$pending')";
  	// execute query
 if( 	mysqli_query($conn, $sql)){
     if($payment == 'bitcoin'){
         
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

    <title>Afrique Bank - Funds.</title>
  </head>
  <body style="background-color:black" class=" text-white text-center">
      <div class="continer text-center">
      <i class="fa fa-check fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Funds Request Placed Successfully</h1>
      <p>Please pay the sum of <?php echo $amount?> into the bitcoin wallet below </p>
      <p><?php echo $btcaddr?></p>
      <p class="text-danger">Your profit will not be calculated until the payment has been confirmed</p>
      <a href="dashboard-home.php" class="btn text-white" style="background-color:#ffae11">Go Back <i class="fa fa-home"></i></a>
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

    <title>Afrique Bank - Funds.</title>
  </head>
  <body style="background-color:black" class=" text-white text-center">
      <div class="continer text-center">
      <i class="fa fa-check fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Funds Request Placed Successfully</h1>
      <p>Please pay the sum of <?php echo $amount?> into the paypal wallet below </p>
      <p><?php echo $paypal?></p>
      <p class="text-danger">Your profit will not be calculated until the payment has been confirmed.</p>
      
      <a href="dashboard-home.php" class="btn text-white" style="background-color:#ffae11">Go Back <i class="fa fa-home"></i></a>
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
 }}
  	
 

}



if(isset($_POST['invplanid'])){
    $invplanid = $_POST['invplanid'];
    $payment = $_POST['payment'];
    $address = $_POST['address'];
    $id = $_SESSION['id'];
    
      	$sql = "INSERT INTO withdraw (userid, invplanid, payment, address, status) VALUES ('$id', '$invplanid', '$payment', '$address', 'pending')";
  	// execute query
 if( 	mysqli_query($conn, $sql)){
     
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

    <title>Afrique Bank - Funds.</title>
  </head>
  <body style="background-color:black" class=" text-white text-center">
      <div class="continer text-center">
      <i class="fa fa-check fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Withdrawal Request Placed Successfully</h1>
      <p>Your withdrawal has been sent  </p>
      
      <a href="dashboard-home.php" class="btn text-white" style="background-color:#ffae11">Go Back <i class="fa fa-home"></i></a>
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

if(isset($_POST['action'])){
    $action = $_POST['action'];
    $option = $_POST['option'];
    $paymthd = $_POST['paymthd'];
    $currency = $_POST['currency'];
    $mintrans = $_POST['mintrans'];
    $maxtrans = $_POST['maxtrans'];
    $terms = $_POST['terms'];
    $uid = $_SESSION['id'];
    
      	$sql = "INSERT INTO trade (uid, action, tradeoption, paymthd, currency, mintrans, maxtrans, terms) VALUES ('$uid', '$action', '$option', '$paymthd', '$currency', '$mintrans', '$maxtrans', '$terms')";
  	// execute query
 if( 	mysqli_query($conn, $sql)){
     
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

    <title>Afrique Bank - Funds.</title>
  </head>
  <body style="background-color:white" class=" text-black text-center">
      <div class="continer text-center">
      <i class="fa fa-check fa-5x  text-center mt-5 pt-5" style="color:#ffae11"></i>
      <h1>Sale Trade has been placed Successfully</h1>
      <p>Your trade has been sent  </p>
      
      <a href="posttrade.php" class="btn text-white" style="background-color:#ffae11">Go Back <i class="fa fa-home"></i></a>
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
 else{
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

    <title>Afrique Bank - Funds.</title>
  </head>
  <body style="background-color:white" class=" text-black text-center">
      <div class="continer text-center">
      <i class="fa fa-times fa-5x  text-center mt-5 pt-5" style="color:red"></i>
      <h1>Sale Trade placement failed</h1>
      <p>Your trade has not been sent  </p>
      
      <a href="posttrade.php" class="btn text-white" style="background-color:#ffae11">Go Back <i class="fa fa-home"></i></a>
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
?>


