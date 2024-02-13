<?php 
// logon session info
$dbServername = "web-dev-env-main-db-1";
$dbUsername = "webDB";
$dbPassword = "password";
$dbName = "webDB";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}