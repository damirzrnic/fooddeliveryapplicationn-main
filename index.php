<?php

echo "I have no idea what I'm doing in this course./n";

$servername = 192.168.10.10;
$username = "damirzrnic";
$password = "root";
$schema = "fooddeliveryapp";


try {
  $conn = new PDO("mysql:host=$servername;port=3306;dbname=$schema", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";



} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}





?>
