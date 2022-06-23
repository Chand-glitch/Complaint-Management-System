<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>Sign Up Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css\fontawesome-free-5.15.3-web\css\all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
</head>
<?php require_once "controller.php"?>
<body class="signup-body">
<div class="sign-up-form">
	<img src="images/avatar.jpg" name="av-img">
	<h1>Sign Up Now</h1>
	<form method="post">
		<input type="text" name="fname" placeholder="First name">
		<input type="text" name="lname" placeholder="Last name">
		<input type="text" name="mobile" placeholder="Mobile number">
		<input type="password" name="password" placeholder="New Password"><br>
		<input type="checkbox" name="input-box" class="agree">I agree to the terms of services.
		<button class="signup-btn" name="btn_signup">Sign Up</button>
		<p>Already have an account?<a href="login.php" class="sign-log">Log In</a></p>
	</form>
</div>
</body>
</html>