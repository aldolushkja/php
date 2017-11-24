<?php
//Start session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sessions - PHP</title>
</head>
<body>
<?php
	echo $_SESSION['unsername'].'s email is' .$_SESSION['email'];
?>
</body>
</html>