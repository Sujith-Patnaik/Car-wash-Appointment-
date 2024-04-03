<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecoreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Unable to connect to the database: " . $conn->connect_error);
} else {
    // Store database connection in session (not recommended)
    $_SESSION['db'] = $conn;
}

// Optionally, you can close the connection after storing it in the session
//$conn->close();
?>

