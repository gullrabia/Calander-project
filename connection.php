<?php
// Database credentials
$host     = "localhost";
$username = "root";
$password = "";
$database = "course_calendar";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection errors
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Set charset
$conn->set_charset("utf8mb4");

// Optional: success message (use only for testing, remove later)
// echo "Database connected successfully!";
?>
