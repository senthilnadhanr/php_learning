<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "myPDODB";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo "<prE>";
    //print_r($stmt->fetch());
    //print_r($stmt->fetchObject());
    //print_r($stmt->fetchColumn(1));
    print_r($stmt->fetchAll());
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;