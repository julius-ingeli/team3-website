<?php
include_once './layout/header.php'; 
?>

<html>
	<section class="signup-form">
		<h2>Sign-Up</h2>
		<form action="./includes/signup.inc.php" method="post">
			<input type="text" name="name" placeholder="Full Name">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwdRepeat" placeholder="Repeat Password">
			<button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
		</form>
		<?php 
		// check data in url
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyinput") {
				echo "<p>Please fill in all fields.</p>";
			} elseif ($_GET['error'] == 'invalidEmail') {
				echo "<p>Please enter a correct email.</p>";
			}
		}
		?>
	</section>
	<?php 
	include_once './layout/footer.php';
	?>
</html>