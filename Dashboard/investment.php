<?php
// session_start();

require('config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = $_SESSION['id'];
$investmentresult = mysqli_query($conn,"SELECT * FROM funds WHERE userid = $id AND status = 'accepted'");

?>
 <link rel="stylesheet" href="../css/style.css">
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
 
 <h3 class="text-center" style="color:#ffae11; padding-bottom:20px; "><i class="fa fa-money"></i> Active Investments</h3>
 <?php
  if ($investmentresult->num_rows > 0) {
      ?>
<div class="table-responsive scroll" style="overflow-y: auto; height: 300px; border-radius: 10px">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-book"></i> Investment Plan </th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-list"></i> Investment Option</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-money"></i> Invested Amount</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff"><i class="fa fa-money"></i> Expected Profit</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-percent"></i> Daily Increase</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-calendar"></i> Transaction Date</th>
      <th scope="col" class="text-center" style="position: sticky; top: 0; background-color:#ffae11; color:#fff "><i class="fa fa-bullhorn"></i>  Action</th>
    </tr>
  </thead>
  <tbody style="color:white;">
      <?php
      
     
          
           while ($row = $investmentresult->fetch_assoc()) {
            echo '    <tr>
      <th scope="row">'.ucfirst($row['plan']).'</th>
      <td>'.ucfirst($row['investoption']).'</td>
      <td>'.$row['amount'].'</td>
      <td>'.$row['profit'].'</td>
      <td>'.$row['prcnt'].'</td>
      <td>'.$row['transactiondate'].'</td>
      <td><a href="withdraw-funds.php" class="btn" style="background-color:#ffae11; color:white;">WITHDRAW</a></td>
    </tr>';   
           }
           ?>
     

    
    
  </tbody>
</table>
</div>
<?php
 }else{
          echo' <p class="text-center" style="color:white">You have not made any investments Yet !</p><br> <p class="text-center">
                                 <a class="btn btn-primary smaller-graph-btn" href="fund-account.php">Invest Now</a>
                              </p>';
      }
      ?>