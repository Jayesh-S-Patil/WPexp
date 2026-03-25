<?php
// ============================================================
// db.php — Database Connection (ALREADY COMPLETE)
// ============================================================
// This file creates a MySQLi connection to the lab7_studentdb database.
// Every other file includes this with: require_once 'db.php';
// That gives them access to the $conn variable.
// ============================================================

$host   = "localhost";       // MySQL server address
$user   = "root";            // Default XAMPP/WAMP username
$pass   = "";                // Default XAMPP password (empty)
$dbname = "lab7_studentdb";  // Database name — must match the one you created

// Create a new MySQLi connection object
$conn = new mysqli($host, $user, $pass, $dbname);

// Check if the connection failed — if so, stop the script and show the error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
