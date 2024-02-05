<?php
$servername = "web-dev-env-main";
$username = "Root";
$password = "password"; // Corrected variable name
$dbname = "App1";

// Create database connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
