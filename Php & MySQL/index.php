<?php 
	include 'db.php';
?>

<?php
	//SELECT QUERY
	$query = "SELECT * FROM messages ORDER BY create_date DESC";
	
	$messages = mysqli_query($connection, $query);

	if(isset($_GET['action']) && isset($_GET['id'])){
		if($_GET['action'] == 'delete'){

			$id = $_GET['id'];

			$query = "DELETE FROM messages WHERE id = $id";

			if(!mysqli_query($connection,$query)){
				die(mysqli_error($connection));
			} else {
				header('Location: index.php?success=Message%20Removed');
			}
		}
	}

	if(isset($_GET['error'])){
		$error = $_GET['error'];
	}

	if(isset($_GET['success'])){
		$success = $_GET['success'];
	}
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
		<?php if(isset($error)) :?>
			<div class="alert"><?php echo $error ?></div>
		<?php endif; ?>
		<?php if(isset($success)) :?>
			<div class="success"><?php echo $success ?></div>
		<?php endif; ?>
	</header>

	<div class="main">
		<form method="POST" action="process.php">
			<input type="text" name="text" placeholder="Enter Message Text">
			<input type="text" name="user" placeholder="Enter Username">
			<input type="submit" value="Submit">
		</form>
		<hr>
		<ul class="messages">
			<?php while($row = mysqli_fetch_assoc($messages)) :?>
				<li><?php echo $row['text']?> | <?php echo $row['user'] ?> | <?php echo $row['create_date']?> - <a href="index.php?action=delete&id=<?php echo $row['id'] ?>">X</a></li>
			<?php endwhile; ?>
		</ul>
	</div>

	<footer>
		MessageApp &copy 2017
	</footer>
</div>
</body>
</html>