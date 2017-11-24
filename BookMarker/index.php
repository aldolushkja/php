<?php
	//Start Session
	session_start();

	if(isset($_POST['name'])){
		if(isset($_SESSION['bookmarks'])){
			$_SESSION['bookmarks'][$_POST['name']] = $_POST['url'];
		} else {
			$_SESSION['bookmarks'] = array($_POST['name'] => $_POST['url']);
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'delete'){
		unset($_SESSION['bookmarks'][$_GET['name']]);
		header('Location: index.php');
	}

	if(isset($_GET['action']) && $_GET['action'] == 'clear'){
		session_unset();
		session_destroy();
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookmarker</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">

	<style type="text/css">
		.delete{
			color: white;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Bookmarker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-right">
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=clear">Clear all</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="md-col-7">
    			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    				<div class="form-group">
    					<label>Website name</label>
    					<input type="text" class="form-control" name="name">
    				</div>
    				<div class="form-group">
    					<label>Website URL</label>
    					<input type="text" class="form-control" name="url">
    				</div>
    				<input type="submit" value="Submit" class="btn btn-primary">
    			</form>
    		</div>
    		<div class="md-col-5">
    			<?php if(isset($_SESSION['bookmarks'])) : ?>
    				<ul class="list-group">
    					<?php foreach ($_SESSION['bookmarks'] as $name => $url) : ?>
    						<li class="list-group-item">
    							<a href="<?php echo $url; ?>"><?php echo $name; ?><a class="delete"href="index.php?action=delete&name=<?php echo $name; ?>">[X]</a></a>
    						</li> 
    					<?php endforeach; ?>
    				</ul>
    			<?php endif; ?>
    		</div>
    	</div>
    </div>
</body>
</html>