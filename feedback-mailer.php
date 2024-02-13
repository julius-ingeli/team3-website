<!-- The PHP logic begins. -->
<?php
// Time to get the variables from the user’s request. Once we execute these four commands, we’ll have the user’s data in our variables.


if (isset($_POST['submit'])) {
	$comment = $_POST['comment'];
}
	// connecting to db server
	include 'database.php';
	// insert data to db
	$sql = "INSERT INTO Feedback(comment)
			VALUES ('$comment')";
	// if query success
	if ($conn->query($sql)==true) {
		echo "Your feedback has been recorded successfully, Thank You!";
	} else {
		// Error: 
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>
