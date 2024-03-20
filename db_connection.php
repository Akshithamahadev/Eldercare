<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "oldms";

// Create connection
$link = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

echo " " ;




?>

