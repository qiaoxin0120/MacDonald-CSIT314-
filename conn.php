<?php
// Sql Connection
$servername = "localhost";
$username = "root";
$password = "root";
$database = "MacDonald";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>