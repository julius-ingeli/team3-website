<?php
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$dob = $_POST['dob'];
	// connecting to db server
	include 'conn.php';
	// insert data to db
	$sql = "INSERT INTO accountInfo(fname,lname,email,password,dob)
			VALUES ('$fname','$lname','$email','$password','$dob')";
	// if query success
	if ($conn->query($sql)==true) {
		echo "Your data has been recorded successfully.";
	} else {
		// Error: 
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}