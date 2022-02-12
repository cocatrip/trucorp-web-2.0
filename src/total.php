<?php
$conn = mysqli_connect("192.168.18.248","root","root","Trucorp", "3307");

if ($conn -> connect_error) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

if ($result = $conn -> query("SELECT * FROM users")) {
  echo "Jumlah User:" . $result -> num_rows;
  $result -> free_result();
}

$conn -> close();
?> 
