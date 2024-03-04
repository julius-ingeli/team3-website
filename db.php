<?php
//if on shell.hamk.fi - USE LOCALHOST AND CREDS FROM MOODLE.
$servername = "web-programming-hamk-tasks-db-1";
$username = "root";
$password = "password";
$dbname = "webDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("". $conn->connect_error);
}

?>