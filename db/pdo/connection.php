<?php
$db_server_host_name = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$db_server_host_name;dbname=php_learning", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>