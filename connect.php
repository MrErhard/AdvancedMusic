<?php

$servername = "localhost:3306"; // Check this port is correct
$username = "root";
$password = "usbw";
$dbname = "AdvancedMusic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>