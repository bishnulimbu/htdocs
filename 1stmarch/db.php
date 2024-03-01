<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phptable1";

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn){
  echo "connection was established successfully";
}else{
die("Connection failed: " . mysqli_connect_error());
}


?>
