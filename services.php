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
	<div id="preloader"></div>
	<section class="service-header">
		<?php
		 require_once "menu.php" 
		 ?>
		 
		<h1>Together for Nature</h1>
		<p>Connecting people and government together for change.</p>
	</section>

	<!-- -----services content----- -->
<section class="services">
<h1>Services Provided</h1>
<p>Problems like Electricity cut out, 
			Road issues, Deforestations, Water problems, Sewarage Problems, <br>Wildlife or Animal abuse, Waste management problems, etc. 
			are to be addressed by this system.</p>
<div class="row">
	<div class="service-col">
		<i class="fas fa-bolt"></i><br>
		<h3><a href="">Department Of Electricity Development</a></h3>
	</div>
	<div class="service-col">
		<i class="fas fa-road"></i><br>
		<h3><a href="">Department Of Roads</a></h3>
	</div>
		<div class="service-col">
		<i class="fas fa-dumpster"></i><br>
		<h3><a href="">Department Of Waste Management</a></h3>
	</div>
</div>
<div class="row">
	<div class="service-col">
		<i class="fas fa-hand-holding-water"></i><br>
		<h3><a href="">Department Of Water Supply & Sewerage Management</a></h3>
	</div>
	<div class="service-col">
		<i class="fas fa-paw"></i><br>
		<h3><a href="">Department Of National Parks and Wildlife Conservation</a></h3>
	</div>
	<div class="service-col">
		<i class="fas fa-tree"></i><br>
		<h3><a href="">Department Of Forests and Soil Conservation</a></h3>
	
	</div>
</div>		

</section >
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