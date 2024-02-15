<?php 
if (isset($_POST["submit"])) {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdRepeat"];

	require_once '../db/db.php';
	include_once 'functions.inc.php';

	// if anything besides false, throw error
	if (emptyInputSignup($name,$email,$uid,$pwd,$pwdRepeat)!=false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if (invalidUid($name)!=false) {
		header("location: ../signup.php?error=invaliduid");
		exit();
	}
	if (invalidEmail($email)!=false) {
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	if (pwdMatch($pwd,$pwdRepeat)!=false) {
		header("location: ../signup.php?error=pwdmismatch");
		exit();
	}
	if (mailExists($conn,$email)!=false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}

	createUser($conn,$name,$email,$uid,$pwd);

} else {
	header("location: ../signup.php");
	exit();
}