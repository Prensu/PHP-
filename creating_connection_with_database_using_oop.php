<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "your_database_name"; // Add your database name here

// Creating connection
$conn = new mysqli($servername, $username, $password, $database); // Corrected the order of parameters

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
