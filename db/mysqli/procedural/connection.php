<?php
$db_server_host_name = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($db_server_host_name, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>