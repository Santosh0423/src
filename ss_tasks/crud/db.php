<?php
$servername = "localhost";
$username = "santosh23000";
$password = "c5p2iCLh"; 
$dbname = "wp_santosh23000";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
