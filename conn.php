<?php
// Sql Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "csit314";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>