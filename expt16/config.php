<?php
$host = "localhost";
$user = "root"; // Change if using a different username
$password = ""; // Change if using a different password
$dbname = "student_details";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>