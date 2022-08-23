<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "student";

$title = "NutmitoDev";
$icon = "https://png.pngtree.com/png-clipart/20190902/original/pngtree-cute-hand-drawn-business-card-url-small-icon-png-image_4402015.jpg";

try {
  $conn = new PDO ("mysql: 
  host=$hostname; 
  dbname=$database; 
  charset=utf8", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) { 
  echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้!: ". $e->getMessage();
}
?>