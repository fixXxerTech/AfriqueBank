<?php
require('../config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  if(isset($_POST['admin'])){

        // removes backslashes
 $email = stripslashes($_REQUEST['admin']);
        //escapes special characters in a string
 $email = mysqli_real_escape_string($conn,$email);
 $password = stripslashes($_REQUEST['pword']);
 $password = mysqli_real_escape_string($conn,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `adminlog` WHERE adminname='$email'
and pword='$password'";
 $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);
 $rowdata = mysqli_fetch_assoc($result);
        if($rows==1){
     $_SESSION['uname'] = $rowdata['fname'];
     $_SESSION['id'] = $rowdata['id'];
            // Redirect user to index.php
     header( "location:home.php" );
     ?>
<?php
         }else{
echo 'Invalid details';
  	    ?>
  	    <?php
 }

  }
  
  if(isset($_POST['btc'])){
         $btc = $_POST['btc'];
         
    $paypal = $_POST['paypal'];
    

if($conn->query("Update admintbl 
Set btcaddr = '$btc'
")){
             header( "refresh:5;url=home.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
  
  if(isset($_GET['aid'])){
       $aid = $_GET['aid'];
         
    // $id = $_POST['id'];
    

if($conn->query("Update funds 
Set status = 'accepted' WHERE id = '$aid'
")){
             header( "refresh:5;url=invest.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
  
  
    if(isset($_GET['did'])){
       $did = $_GET['did'];
         
    // $id = $_POST['id'];
    

if($conn->query("Update funds 
Set status = 'declined' WHERE id = '$did'
")){
             header( "refresh:5;url=invest.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
  
  
  if(isset($_GET['diid'])){
       $diid = $_GET['diid'];
         
    // $id = $_POST['id'];
    // $delete = mysql_query("DELETE FROM mods WHERE id = '$id'", $conn);

if($conn->query("Delete from funds WHERE id = '$diid'
")){
             header( "refresh:5;url=invest.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
  
  
  
  
    if(isset($_GET['waid'])){
       $waid = $_GET['waid'];
         
    // $id = $_POST['id'];
    

if($conn->query("Update withdraw
Set status = 'accepted' WHERE id = '$waid'
")){
             header( "refresh:5;url=withdraw.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
  
  
    if(isset($_GET['wdid'])){
       $wdid = $_GET['wdid'];
         
    // $id = $_POST['id'];
    

if($conn->query("Update withdraw 
Set status = 'declined' WHERE id = '$wdid'
")){
             header( "refresh:5;url=withdraw.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
  
  if(isset($_GET['wid'])){
       $wid = $_GET['wid'];
         
    // $id = $_POST['id'];
    

if($conn->query("Delete from withdraw WHERE id = '$wid'
")){
             header( "refresh:5;url=withdraw.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
  
    if(isset($_GET['uid'])){
       $uid = $_GET['uid'];
         
    // $id = $_POST['id'];
    

if($conn->query("Delete from user WHERE id = '$uid'
")){
             header( "refresh:5;url=home.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
  
  
  if(isset($_POST['bal'])){
         $bal = $_POST['bal'];
         
    $id = $_POST['id'];
    

if($conn->query("Update funds 
Set profit = '$bal' WHERE id = '$id'
")){
             header( "refresh:5;url=invest.php" );
    echo "Records were updated successfully. You will be redirected to dashboard";
}else {
    echo "ERROR:". mysqli_error($conn);
} ;
  }
?>