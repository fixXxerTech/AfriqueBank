<?php
// session_start();

require('../config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $id = $_SESSION['id'];
$investmentresult1 = mysqli_query($conn,"SELECT * FROM withdraw ");


$investmentresult2 = mysqli_query($conn,"SELECT * FROM funds WHERE status = 'accepted");

$investmentresult3 = mysqli_query($conn,"SELECT * FROM funds WHERE status = 'declined");

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
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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
<div class="px-2 py-4">
           <?php
  if ($investmentresult1->num_rows > 0) {
      ?>
            <div class="text-center">
          <h4> Total Pending</h4>
          <p><?php echo $investmentresult1->num_rows ?></p>
      </div>
      <form method="post" action="searchuser.php">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search using userID" aria-label="Recipient's username" name="searchuserwithdraw" aria-describedby="button-addon2">
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
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> Investment Plan ID </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> Payment Method </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-list"></i> Receieving Address</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-percent"></i> Status</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-calendar"></i> Transaction Date</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-bullhorn"></i>  Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      
     
          
           while ($row = $investmentresult1->fetch_assoc()) {
            echo '    <tr>
            <td>'.$row['id'].'</td>
      <th scope="row">'.$row['invplanid'].'</th>
      <td>'.ucfirst($row['payment']).'</td>
      <td>'.$row['address'].'</td>
      <td>'.$row['status'].'</td>
      <td>'.$row['transactiondate'].'</td>
      
<td><a href="admin.php?waid='.$row['id'].'" class="btn" style="background-color:#ffae11; color:white;">Accept</a>
      
            <a href="admin.php?wdid='.$row['id'].'" class="btn" style="background-color:red; color:white;">Decline</a>
            
            <a href="admin.php?wid='.$row['id'].'" class="btn" style="background-color:red; color:white;">Delete</a>
      </td>
    </tr>';   
           
           }
           ?>
     

    
    
  </tbody>
</table>
</div>
<?php
 }else{
          echo' <p class="text-center">You have no withdrawal requests Yet !</p><br> <p class="text-center">
                                
                              </p>';
      }
      ?>


      </div>


  </body>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>