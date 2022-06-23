<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>Complain Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="css\fontawesome-free-5.15.3-web\css\all.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<!-- <div id="preloader"></div> -->
	<section class="sub-header">
		<?php require_once "menu.php" ?>
		<h1>About Us</h1>
	</section>

	<!-- -----about us content----- -->
	<section class="about-us">
		<div class="row">
			<div class="about-col">
				<h1>Together for Nature</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href=""></a>
			</div>
			<div class="about-col">
				<img src="images/about-group.jpg" width="350" height="350">
			</div>
		</div>
	</section>

<!-- -----footer----- -->
<section class="footer">
	<h4>About Us</h4>
	<p>Complain Management System is the website developed for decreasing the distance between 
						government and public issues<br> which are remained unheard most of the times. So if you have something 
						wrong going on in your society,<br> you can complain on our website which will be solved by government.Thank you!!</p>

	<div class="icons">
		<i class="fab fa-facebook-f"></i>
		<i class="fab fa-twitter"></i>
		<i class="fab fa-instagram"></i>
		<i class="fab fa-youtube"></i>
	</div>
	<p>All rights reserved. <i class="far fa-copyright"></i></p>
</section>

<!-- ----------JavaScript---------- -->

<script type="text/javascript">
	var navLinks = document.getElementById("nav-links");
	function showMenu()
	{
		navLinks.style.right="0";
	}

	function hideMenu()
	{
		navLinks.style.right="-200px";
	}
	
</script>

<script type="text/javascript">
	var preloader = document.getElementById("preloader");
	window.addEventListener("load",function(){
		preloader.style.display = "none";
	})
</script>
</body>
</html>