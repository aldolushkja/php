<?php include 'db.php' ?>

<?php 
	if(isset($_POST['text']) && isset($_POST['user'])){
		$text = mysqli_real_escape_string($connection,$_POST['text']);
		$user = mysqli_real_escape_string($connection,$_POST['user']);

		$query = "INSERT INTO messages(text,user) VALUES ('$text','$user')";

		if(!mysqli_query($connection,$query)){
			die(mysqli_error($connection));
		} else {
			header('Location: index.php?success=Message%20Added');
			exit();
		}

	} else {

		header('Location: index.php?error=Please%20Fill%20In%20%20All%20Fields');
		
	}
?>