<?php
$servername = "quanlytiemnet-server.mysql.database.azure.com:3308";
$username = "scibuhwdal";
$password = "Dungpro7502.";
$database = "quanlytiemnet";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
$conn -> set_charset('utf8');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>