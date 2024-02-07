<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<body>
	<div style="container">
		<div style="row">
			<div style="col">
				<form>
					<div class="form-group">
						<div class="row">
							<div class="col">
								<label for="fname">First Name:</label>
								<input type="text" class="form-control" id="fname" placeholder="John" name="fname" required>
								<label for="lname">Last Name:</label>
								<input type="text" class="form-control" id="lname" placeholder="Doe" name="lname" required>
							</div>
							<div class="col">
								<label for="email">E-Mail:</label>
								<input type="text" class="form-control" id="email" placeholder="john.doe@email.com" name="email" required>
								<label for="phone">Phone:</label>
								<input type="phone" class="form-control" id="phone" placeholder="+100 123 456 789" name="phone">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<?php include 'footer.php' ?>
</html>