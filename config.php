<?php
$host = "localhost";
$user = "root";  // Default MySQL username in XAMPP
$password = "";  // Default password is empty in XAMPP
$database = "my_project";  // Update this to match EXACTLY what you see in phpMyAdmin

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
