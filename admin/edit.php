<?php
session_start();

require('../config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_GET['id'])){
    $id = $_GET['id'];
        //escapes special characters in a string

 //Checking is user existing in the database or not
        $query = "SELECT * FROM `user` WHERE id='$id'";
 $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);
 $rowdata = mysqli_fetch_assoc($result);
 
 
 
         $queryfunds = "SELECT * FROM `funds` WHERE userid='$id'";
 $resultfunds = mysqli_query($conn,$queryfunds) or die(mysqli_error($conn));
 $rowsfunds = mysqli_num_rows($resultfunds);
 $rowdatafunds = mysqli_fetch_assoc($resultfunds);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
            <p class="text-center mt-2"><a href="home.php" class="btn btn-secondary">
Go Back
</a></p><br>
      
<!--      <p class="text-center mt-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
<!--Edit Balance-->
<!--</button></p>-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Balance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="admin.php">
        <div class="input-group mb-3">

  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="bal" value="<?php echo $rowdatafunds['profit'] ?> ">
  
    <input type="hidden" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="id" value="<?php echo $rowdata['id'] ?> ">
</div>


<button class="btn btn-success">Change Balance</button>
</form>
      </div>

    </div>
  </div>
</div>


      <div class="container py-4">
          <h3>User Details</h3>
      <div class="table-responsive">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">User Properties</th>
      <th scope="col">Values</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">First Name</th>
      <td><?php echo $rowdata['fname']?></td>
     
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><?php echo $rowdata['lname']?></td>
     
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><?php echo $rowdata['email']?></td>
    </tr>
    
        <tr>
      <th scope="row">Country</th>
      <td><?php echo $rowdata['country']?></td>
    </tr>
    
        <tr>
      <th scope="row">SSN</th>
      <td>
      <?php 
      
      if($rowdata['ssn']){
          echo $rowdata['ssn'];
      }else{
          echo 'Not Applicable';
      }
      
      
      ?></td>
    </tr>
    
        <tr>
      <th scope="row">Phone</th>
      <td><?php echo $rowdata['phone']?></td>
    </tr>
    
        <tr>
      <th scope="row">Address</th>
      <td><?php echo $rowdata['address']?></td>
    </tr>
  </tbody>
</table>
    </div>
    <hr>
    
    <div class="row">
        <div class="col">
                Front ID Image:<br>
    <img src="../frontimages/<?php echo $rowdata['frontid'] ?>" class="img img-fluid">
        </div>
        <div class="col">
                           Back ID Image:<br>
    <img src="../backimages/<?php echo $rowdata['backid'] ?>" class="img img-fluid">
        </div>
    </div>
        <hr>
    
    Selfie Image:<br>
    <img src="../selfieimages/<?php echo $rowdata['selfie'] ?>" class="img img-fluid">
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>