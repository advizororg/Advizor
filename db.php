<?php
$servername = "sql8.freesqldatabase.com";
$username = "sql8713283";  // Your phpMyAdmin username, usually "root" for local installations
$password = "1Cc734Xk6V";  // Your phpMyAdmin password, usually empty for local installations
$dbname = "sql8713283";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
