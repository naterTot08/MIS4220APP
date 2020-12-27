<?php 

$dbServername = "localhost";
$dbUsername ="";
$dbPassword = '';
$dbName = "HBH4220";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 
