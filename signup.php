<!DOCTYPE html>
<html lang="en">
<?php include './layout/header.php';
include './db/conn.php'; ?>
<head>
	<script src="pwd-validation.js"></script>
	<style>
		.valid {
			color:green;
		}
		.invalid {
			color:red;
		}
		#pwd-warning {
			display:none;
		}
	</style>
</head>
<body>
	<div style="container">
		<div style="row">
			<div style="col">
				<form method="post" action="#">
					<div class="form-group">
						<div class="row">
							<div class="col">
								<label for="fname">First Name:</label>
								<input type="text" class="form-control" id="fname" placeholder="John" name="fname" required>
								<label for="lname">Last Name:</label>
								<input type="text" class="form-control" id="lname" placeholder="Doe" name="lname" required>
								<label for="dob">Date of Birth:</label>
								<input type="date" class="form-control" id="dob" name="dob">
							</div>
							<div class="col">
								<label for="email">E-Mail:</label>
								<input type="text" class="form-control" id="email" placeholder="john.doe@email.com" name="email" required>
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="password1234" required>
							</div>
						</div>
						<div class="row">
							<button type="submit" class="btn btn-primary" name="submit">Submit</button>
						</div>
					</div>
				</form>
				<?php include './db/process.php' ?>
			</div>
			<div id="pwd-warning">
				<span>Your password must contain the following:</span>
				<p id="pwd-low">A lowercase letter</p>
				<p id="pwd-upp">An uppercase letter</p>
				<p id="pwd-num">A number</p>
				<p id="pwd-char">A minimum of 8 characters</p>
			</div>
		</div>
	</div>
</body>
<?php include './layout/footer.php' ?>
</html>