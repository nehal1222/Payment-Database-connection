<?php

echo('<PRE>');
print_r($_GET);
if($_GET['payment_status'] == 'Credit'){
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apartment";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



$roomNo = $_GET['roomNo'];
$payment_id = $_GET['payment_id'];
$payment_status = $_GET['payment_status']; 
$payment_request_id = $_GET['payment_request_id']; 

$sql = "INSERT INTO apartment_tbl (roomNo, payment_id, payment_status, payment_request_id)
VALUES ('$roomNo', '$payment_id', '$payment_status', '$payment_request_id')";



if (mysqli_query($conn, $sql)) {
    echo "New Review Added Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
   

  

mysqli_close($conn);

header("Location: http://localhost/apartment_maintenance/");



}
