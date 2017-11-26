<?php 
	include 'db.php';
?>

<?php
	//SELECT QUERY
	$query = "SELECT * FROM messages";
	$messages = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Message App</title>
	<link rel="styesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<header>
		<h1>Message App</h1>
	</header>

	<div class="main">
		<form>
			<input type="text" name="text" placeholder="Enter Message Text">
			<input type="text" name="user" placeholder="Enter Username">
			<input type="submit" value="Submit">
		</form>
		<hr>
		<ul class="messages">
			<?php while($row = mysqli_fetch_assoc($messages)) :?>
				<li><?php echo $row['text']?> | <?php echo $row['user'] ?> | <?php echo $row['create_date']?></li>
			<?php endwhile; ?>
		</ul>
	</div>

	<footer>
		MessageApp &copy 2017
	</footer>
</div>
</body>
</html>