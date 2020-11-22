<?php 
/* 
 * Basic Site Settings and API Configuration 
 */ 
 
// Database configuration 
// define('DB_HOST', 'localhost'); 
// define('DB_USERNAME', 'id13910997_farmnew'); 
// define('DB_PASSWORD', 'GF#/)Ad>r]7WqO9&'); 
// define('DB_NAME', 'id13910997_new'); 
// // define('DB_USER_TBL', 'users'); 



   $dbHost     = 'localhost';
$dbUsername = 'paraxhny_new';
$dbPassword = "Paradice123$";
$dbName     = 'paraxhny_new';
//Create connection and select DB
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//Check connection
if($conn->connect_error){
   die("Connection failed: " . $conn->connect_error);
}

?>