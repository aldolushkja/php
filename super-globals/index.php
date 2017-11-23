<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<div class="w3-card w3-margin w3-padding">
		<?php if(isset($_GET['error'])): ?>
			<div class="w3-panel w3-red">
				<p><?php echo $_GET['error']; ?></p>
			</div>
		<?php endif; ?>

	<h2>Register</h2>
	<form class="w3-container" method="POST" action="register.php">
		<label class="w3-label w3-text-blue">First name</label>
		<input class="w3-input w3-border" type="text" name="first_name">
		<br>
		<label class="w3-label w3-text-blue">Last Name</label>
		<input class="w3-input w3-border" type="text" name="last_name">
		<br>
		<label class="w3-label w3-text-blue">Email</label>
		<input class="w3-input w3-border" type="text" name="email">
		<br>
		<label class="w3-label w3-text-blue">Location</label>
		<select class="w3-input w3-border" name="location">
			<option value="Location 1">Location 1</option>
			<option value="Location 2">Location 2</option>
			<option value="Location 3">Location 3</option>
		</select>
		<br>
		<input type="submit" value="Submit">
	</form>
</div>
</body>
</html>