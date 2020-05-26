<?php
$servername = "localhost";
$username = "root";
$password = "Sanifar1!";
$dbname = "vereinshaus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>