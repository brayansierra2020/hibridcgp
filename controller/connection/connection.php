<?php
$servername = "localhost";
$database = "inventario";
$username = "root";
$password = "";
// Create connection
@$conn = new MySQLi($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}




?>