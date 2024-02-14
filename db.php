<?php
$servername = "db"; // Replace with your MySQL server hostname
$username = "webDB";     // Replace with your MySQL username
$password = "pass1234";     // Replace with your MySQL password
$dbname = "webDB";       // Replace with the name of your MySQL database

/*
shell.hamk.fi access

$servername = "localhost"; // Replace with your MySQL server hostname
$username = "filip23000";     // Replace with your MySQL username
$password = "uE6oVlHe";     // Replace with your MySQL password
$dbname = "wp_filip23000";       // Replace with the name of your MySQL database
*/

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>