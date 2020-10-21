<?php
// session_start();

require('../config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $id = $_SESSION['id'];
$investmentresult = mysqli_query($conn,"SELECT * FROM user");


    $adminsql = "SELECT * from admintbl";
     $adminresult = mysqli_query($conn,$adminsql) or die(mysqli_error($conn));
//  $adminrows = mysqli_num_rows($adminsql);
 $adminrowdata = mysqli_fetch_assoc($adminresult);
 
 $btcaddr = $adminrowdata['btcaddr'];
  $paypal = $adminrowdata['paypal'];
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
    
     <style>
     .scroll {
   /*width: 200px;*/
   /*height: 400px;*/
    /*background: red;*/
   overflow-y: scroll;
}
.scroll::-webkit-scrollbar {
    width: 12px;
}

.scroll::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}

.scroll::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background:#ffae11;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
 </style>
 
  </head>
  <body>
      
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!--<a class="navbar-brand" href="#">Navbar</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="invest.php">Investments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="withdraw.php">Withdrawals</a>
      </li>
      
            <li class="nav-item">
        <a class="nav-link btn btn-danger text-white" href="logout.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Button trigger modal -->
<p class="text-center mt-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Edit Payment Details
</button></p>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="admin.php">
        <div class="input-group mb-3">

  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="btc" value="<?php echo $btcaddr ?> ">
</div>

<div class="input-group mb-3">

  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="paypal" value="<?php echo $paypal ?> ">
</div>
<button class="btn btn-success">Change Payment Details</button>
</form>
      </div>

    </div>
  </div>
</div>


<div class="px-2 py-4">
     <?php
  if ($investmentresult->num_rows > 0) {
      ?>
            <div class="text-center">
          <h4> Total Users</h4>
          <p><?php echo $investmentresult->num_rows ?></p>
      </div>
      <form method="post" action="searchuser.php">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search using email or ID" aria-label="Recipient's username" name="searchuser" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
  </div>
</div>
</form>
<div class="table-responsive scroll" style="overflow-y: auto; height: 300px; border-radius: 10px">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> ID </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> First Name </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> Last Name</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-envelope"></i> Email</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-map"></i> Country</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-card"></i> SSN</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-phone"></i> Phone Number</th>
        <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-calendar"></i> Address</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-bullhorn"></i>  Action</th>
    </tr>
  </thead>
  <tbody >
      <?php
      
     
          
           while ($row = $investmentresult->fetch_assoc()) {
            echo '    <tr>
            <td>'.$row['id'].'</td>
      <th scope="row">'.ucfirst($row['fname']).'</th>
      <td>'.ucfirst($row['lname']).'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['country'].'</td>
      <td>'.$row['ssn'].'</td>
      <td>'.$row['phone'].'</td>
      <td>'.$row['address'].'</td>
      <td><a href="edit.php?id='.$row['id'].'" class="btn" style="background-color:#ffae11; color:white;">View / Edit</a>
      
      <a href="admin.php?uid='.$row['id'].'" class="btn m-2 btn-danger" style="color:white;">Delete</a></td>
    </tr>';   
           }
           ?>
     

    
    
  </tbody>
</table>
</div>
<?php
 }else{
          echo' <p class="text-center">You have no users Yet !</p><br> <p class="text-center">
                                 <a class="btn btn-primary smaller-graph-btn" href="fund-account.php">Invest Now</a>
                              </p>';
      }
      ?>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>