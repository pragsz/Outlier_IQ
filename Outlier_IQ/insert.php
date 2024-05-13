<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

$temp=trim($_POST['temp']);
$hum=trim($_POST['hum']);
$device_id=trim($_POST['device_id']);
$location=trim($_POST['location']);



$servername = "sql307.infinityfree.com";
$username = "if0_36214675";
$password = "wKEdKiWwksG8N";
$dbname = "if0_36214675_iot_data";
date_default_timezone_set('Asia/Kolkata');
$timestamp = time();
$timestamp = trim(date('y-m-d H:i:s T', $timestamp));
//
//echo "<br>";
//echo "<br>";
//
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//  if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//  }
//  else{
//      echo " connected!";
//  }

$sql = "INSERT INTO th_sensor_data (timestamp,temp,hum,device_id,location) VALUES ('".$timestamp."','".$temp."','".$hum."','".$device_id."','".$location."')";
mysqli_query($conn, $sql);

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

mysqli_close($conn);
?>