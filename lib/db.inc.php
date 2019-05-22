<?php
$server = "127.0.0.1";
$user = "eric";
$password = "eric";
$database = "concerts";
$conn = mysqli_connect($server,$user,$password,$database);
if($conn->connect_error) die("Connection failed: " . $conn->connect_error);
mysqli_set_charset($conn, "utf8");

// if(mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }

// MAKE DATA SAFE TO USE IN QUERIES
function clean($data, $conn) {
  if(get_magic_quotes_gpc()) $data = stripslashes($data);
  return mysqli_real_escape_string($conn, trim($data));
}
