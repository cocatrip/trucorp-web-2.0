<?php
$conn = mysqli_connect("192.168.18.248","root","root","Trucorp", "3307");

if ($conn -> connect_error) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

if ($result = $conn -> query("SELECT * FROM users")) {
  while ($row = $result -> fetch_assoc()) {
    echo "ID      : " . $row["ID"] . "<br>";
    echo "Nama    : " . $row["Nama"] . "<br>";
    echo "Alamat  : " . $row["Alamat"] . "<br>";
    echo "Jabatan : " . $row["Jabatan"] . "<br>";
    echo "<br>";
  }
  $result -> free_result();
}

$conn -> close();
?> 
