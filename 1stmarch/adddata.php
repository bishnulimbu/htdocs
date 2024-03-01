<?php
include 'db.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$sql = "INSERT INTO phptable1 (name, phone) VALUES ('$name', '$phone')";

$result = mysqli_query($conn, $sql);
if($result){
  echo "data inserted successfully...";
}else{
  echo "error". mysqli_error($conn);
}
