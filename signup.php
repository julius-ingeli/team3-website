<?php
include_once './layout/header.php';
// include_once './includes/functions.inc.php';
?>

<html>
	<script src="./includes/validation.js"></script>
	<h2>Sign-Up</h2>
	<section class="signup-form">
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="./db/process.php" method="post">
				<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
				<input type="text" class="form-control" name="lname" id="lname" placeholder="Second Name">
				<input type="text" class="form-control" name="email" id="email" placeholder="Email">
			</div>
			<div class="col">
				<input type="date" class="form-control" name="dob" id="dob">
				<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
				<input type="password" class="form-control" name="pwdRepeat" id="pwd" placeholder="Repeat Password">
				</form>
			</div>
		</div>
		<div class="row">
			<button type="submit" class="btn btn-primary" name="submit" class="submit" id="submit">Sign Up</button>
			<?php 
			if (isset($_POST['submit'])) { 
				// $fname=$_POST['fname'];
				// $fname=$_POST['lname'];
				// $fname=$_POST['email'];
				// $fname=$_POST['pwd'];
				// createUser($conn,$fname,$lname,$email,$pwd);
				mysqli_stmt_prepare($stmt,$sql);
			}
			?>
		</div>
		<div class="row">
			<div class="col">
				<div class="pwd-warning">
					<span>Your password must contain the following:</span>
					<p id="pwd-low">A lowercase letter</p>
					<p id="pwd-upp">An uppercase letter</p>
					<p id="pwd-num">A number</p>
					<p id="pwd-char">A minimum of 8 characters</p>
				</div>
			</div>
		</div>
	</div>
		<?php 
		//check data in url
		// if (isset($_GET['error'])) {
		// 	if ($_GET['error'] == "emptyinput") {
		// 		echo "<p>Please fill in all fields.</p>";
		// 	} elseif ($_GET['error'] == 'invalidEmail') {
		// 		echo "<p>Please enter a correct email.</p>";
		// 	}
		// }
		?>
	</section>
	<?php 
	include_once './db.php';
	include_once './db/process.php';
	include_once './layout/footer.php';
	?>
</html>