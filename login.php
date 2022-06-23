<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css\fontawesome-free-5.15.3-web\css\all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<?php 
require 'controller.php';
	if(isset($_SESSION['username'])){
		header('location:index.php');
	}?>

<body>
<div class="login-form">
	<h1>User Login</h1>
	<form method="post">
		<?php 
			if(isset($err['er'])){
				echo $err['er'];
			}
		?>
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<button class="login-btn" name="login-btn">Login</button>
	</form>
</div>
</body>
</html>
