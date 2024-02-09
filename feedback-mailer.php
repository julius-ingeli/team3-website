<!-- The PHP logic begins. -->
<?php
// Time to get the variables from the user’s request. Once we execute these four commands, we’ll have the user’s data in our variables.

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$header = $_POST['header'];
	$message = $_POST['message'];
	// connecting to db server
	include 'database.php';
	// insert data to db
	$sql = "INSERT INTO feedback(name,email,title,message)
			VALUES ('$name','$email','$header','$message')";
	// if query success
	if ($conn->query($sql)==true) {
		echo "Your data has been recorded successfully.";
	} else {
		// Error: 
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
