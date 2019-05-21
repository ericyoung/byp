<?php
$server = "localhost";
$user = "eric";
$password = "eric";
$database = "concerts";
$conn = mysqli_connect($server,$user,$password,$database);
if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// if(mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }
