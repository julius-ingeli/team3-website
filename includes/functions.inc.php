<?php
function emptyInputSignup($name,$email,$uid,$pwd,$pwdRepeat) {
	$result=true;
	if (empty($name) || ($email) || ($uid) || ($pwd) || ($pwdRepeat)) {
		$result = true;
	} else {
		$result = false;
	}
}
function invalidName($name) {
	$result=true;
	// check symbols in name.
	// preg_match(filter, string, ...) <-- required
	if (!preg_match(("/^[a-zA-Z]*$/"),$name)) { 
		$result = true;
	} else {
		$result = false;
	}
}
function invalidEmail($email) {
	$result=true;
	// check symbols in uid
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	} else {
		$result = false;
	}
}
function pwdMatch($pwd,$pwdRepeat) {
	$result=true;
	// check symbols in uid
	if ($pwd !== $pwdRepeat) {
		$result = true;
	} else {
		$result = false;
	}
}
function mailExists($conn,$email) {
	$result=true;
	$sql = "SELECT * FROM accountInfo WHERE email = ?;";
	// initializing prepared statement
	$stmt = mysqli_stmt_init($conn);
	// check statement for errors
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		// booted back to signup with error msg
		header("location: ../signup.php");
		exit();
	}
	// s -> single string (mail) passes. add s for every additional string <3
	mysqli_stmt_bind_param($stmt, "s", $email);
	// execute statement
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($resultData)) {
		// returning data for user if already exists in db
		return $row;
	} else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}
function createUser($conn,$name,$email,$uid,$pwd) {
	$result=true;
	$sql = "INSERT INTO accountInfo(fname,email,passwd) VALUES(?,?,?,?);";
	// initializing prepared statement
	$stmt = mysqli_stmt_init($conn);
	// check statement for errors
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		// booted back to signup with error msg
		header("location: ../signup.php?error=none");
		exit();
	}
	// s -> single string (mail) passes. add s for every additional string <3
	mysqli_stmt_bind_param($stmt, "sss", $name,$email,$uid,$pwd);
	// execute statement
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close();
	exit();
}