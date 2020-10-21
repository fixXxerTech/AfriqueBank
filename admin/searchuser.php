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
<?php
session_start();

require('../config.php');

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);



if(isset($_POST['searchuser'])){
    $search = $_POST['searchuser'];
    
     $query = "SELECT * FROM `user` WHERE email LIKE '%$search%' OR id LIKE '%$search%'";
 $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);

        if($rows>0){
            ?>
            <h1>SEARCH RESULTS</h1>
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
      
     
          
           while ( $rowdata = mysqli_fetch_assoc($result)) {
            echo '    <tr>
            <td>'.$rowdata['id'].'</td>
      <th scope="row">'.ucfirst($rowdata['fname']).'</th>
      <td>'.ucfirst($rowdata['lname']).'</td>
      <td>'.$rowdata['email'].'</td>
      <td>'.$rowdata['country'].'</td>
      <td>'.$rowdata['ssn'].'</td>
      <td>'.$rowdata['phone'].'</td>
      <td>'.$rowdata['address'].'</td>
      <td><a href="edit.php?id='.$rowdata['id'].'" class="btn" style="background-color:#ffae11; color:white;">View / Edit</a></td>
    </tr>';   
           }
           ?>
     

    
    
  </tbody>
</table>
</div>
<?php
        }else{
          echo' <h1 class="text-center" >No results !</h1><br> <p class="text-center">
                                 
                              </p>';
      }
}



elseif(isset($_POST['searchuserinvest'])){
    $search = $_POST['searchuserinvest'];
    
     $query = "SELECT * FROM `funds` WHERE userid LIKE '%$search%'";
 $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);

        if($rows>0){
            ?>
            <h1>SEARCH RESULTS</h1>
            <div class="table-responsive scroll" style="overflow-y: auto; height: 300px; border-radius: 10px">
<table class="table table-bordered">
   <thead>
    <tr>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> User ID </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> Investment Plan </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-list"></i> Investment Option</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-money"></i> Invested Amount</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-money"></i> Mode of payment</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-percent"></i> Status</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-calendar"></i> Transaction Date</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-bullhorn"></i>  Action</th>
    </tr>
  </thead>
 <tbody>
      <?php
      
     
          
           while ($row = $result->fetch_assoc()) {
            echo '    <tr>
            <td>'.$row['userid'].'</td>
      <th scope="row">'.ucfirst($row['plan']).'</th>
      <td>'.ucfirst($row['investoption']).'</td>
      <td>'.$row['amount'].'</td>
      <td>'.$row['payment'].'</td>
      <td>'.$row['status'].'</td>
      <td>'.$row['transactiondate'].'</td>
      <td><a href="admin.php?aid='.$row['id'].'" class="btn" style="background-color:#ffae11; color:white;">Accept</a>
      
            <a href="admin.php?did='.$row['id'].'" class="btn" style="background-color:red; color:white;">Decline</a>
      </td>
    </tr>';   
           }
           ?>
     

    
    
  </tbody>
</table>
</div>
<?php
        }else{
          echo' <h1 class="text-center" >No results !</h1><br> <p class="text-center">
                                 
                              </p>';
      }
}


elseif(isset($_POST['searchuserwithdraw'])){
    $search = $_POST['searchuserwithdraw'];
    
     $querywit = "SELECT * FROM `withdraw` WHERE invplanid LIKE '%$search%'";
 $resultwit = mysqli_query($conn,$querywit) or die(mysqli_error($conn));
 $rowswit = mysqli_num_rows($resultwit);

        if($rowswit>0){
            ?>
            <h1>SEARCH RESULTS</h1>
            <div class="table-responsive scroll" style="overflow-y: auto; height: 300px; border-radius: 10px">
<table class="table table-bordered">
   <thead>
    <tr>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> User ID </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> Investment Plan ID </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-list"></i> Preferred Payment</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-money"></i> Payment Address</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-percent"></i> Status</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-calendar"></i> Transaction Date</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-bullhorn"></i>  Action</th>
    </tr>
  </thead>
 <tbody>
      <?php
      
     
            while ($rowwit = $resultwit->fetch_assoc()) {
            echo '    <tr>
            <td>'.$rowwit['id'].'</td>
      <th scope="row">'.$rowwit['invplanid'].'</th>
      <td>'.ucfirst($rowwit['payment']).'</td>
      <td>'.$rowwit['address'].'</td>
      <td>'.$rowwit['status'].'</td>
      <td>'.$rowwit['transactiondate'].'</td>';
      if($rowwit['status'] != 'pending'){
         echo '<td> No Action </td>';
      }else{
echo '      <td><a href="admin.php?aid='.$rowwit['id'].'" class="btn" style="background-color:#ffae11; color:white;">Accept</a>
      
            <a href="admin.php?did='.$rowwit['id'].'" class="btn" style="background-color:red; color:white;">Decline</a>
      </td>
    </tr>';   
           }
           }
           ?>
     

    
    
  </tbody>
</table>
</div>
<?php
        }else{
          echo' <h1 class="text-center" >No results !</h1><br> <p class="text-center">
                                 
                              </p>';
      }
}


?>