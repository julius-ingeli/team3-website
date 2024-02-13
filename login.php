<?php
include_once './layout/header.php'; 
?>

<html>
	<section class="login-form">
		<h2>Sign-Up</h2>
		<div class="signup-form-form">
			<form action="./includes/login.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username/E-Mail">
				<input type="password" name="pwd" placeholder="Password">
				<input type="text" name="pwdRepeat" placeholder="Repeat Password">
				<button type="submit" class="btn btn-primary" name="submit">Log In</button>
			</form>
		</div>
	</section>
</html>