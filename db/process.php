<?php
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$dob = $_POST['dob'];

	// include 'conn.php';
	$result=true;

	$sql = "INSERT INTO accountInfo(fname,lname,email,passwd,dob) VALUES(?,?,?,?,?);";
	// initializing prepared statement
	$stmt = mysqli_stmt_init($conn);
	// check statement for errors
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		// booted back to signup with error msg
		header("location: ../signup.php?error=none");
		exit();
	}
	// s -> single string (mail) passes. add s for every additional string <3
	mysqli_stmt_bind_param($stmt, "ssssd", $fname,$lname,$email,$pwd,$dob);
	// execute statement
	if ($conn->query($sql)==true) {
		echo "Your data has been recorded successfully.";
	} else {
		// Error: 
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
exit();
} else {
	echo "nejde to";
}