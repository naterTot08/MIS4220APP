<?php 

$dbServername = "localhost";
$dbUsername ="armst355";
$dbPassword = '';
$dbName = "HBH4220";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 


 ?>