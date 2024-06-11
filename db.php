<?php
$servername = "localhost";
$username = "root";  // Your phpMyAdmin username, usually "root" for local installations
$password = "";  // Your phpMyAdmin password, usually empty for local installations
$dbname = "advizor_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
