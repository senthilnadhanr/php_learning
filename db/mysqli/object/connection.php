<?php
$host_name = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($host_name, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//PHP versions prior to 5.2.9 and 5.3.0
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>