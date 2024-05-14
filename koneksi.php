<?php
// Define database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventaris";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>