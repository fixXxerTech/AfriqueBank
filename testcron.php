<?php

require('config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$cron = mysqli_query($conn,"SELECT * FROM funds WHERE status = 'accepted' ");

while ($row = $cron->fetch_assoc()) {
    $id = $row['id'];
$capital = $row['amount'];
$prcnt = $row['prcnt'];
$profit = $row['profit'];

$increase = $capital * ($prcnt/100);

$profit2 = $increase + $profit;


$sql = "UPDATE funds SET profit='$profit2' WHERE id=$id"; 
if(mysqli_query($conn, $sql)){ 
    echo "Record was updated successfully."; 
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($conn); 
}  


echo '<p>'.$profit .'</p>';

};

?>