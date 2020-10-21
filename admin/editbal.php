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
//         $query = "SELECT * FROM `user` WHERE id='$id'";
//  $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
//  $rows = mysqli_num_rows($result);
//  $rowdata = mysqli_fetch_assoc($result);
 
 
 
         $queryfunds = "SELECT * FROM `funds` WHERE id='$id'";
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
  
    <input type="hidden" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="id" value=" <?php echo $rowdatafunds['id'] ?> ">
</div>


<button class="btn btn-success">Change Balance</button>
</form>
      </div>

    </div>
  </div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>