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
	<?php
		$server = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'db_cms';

		$connection = new mysqli($server,$username,$password,$database);
		if($connection -> connect_errno != 0)
		{
			die('Connection error');
		}

		if(!mysqli_select_db($connection,'db_cms'))
		{
			echo 'Database not selected';
		}

		if(isset($_POST['btn_submit']))
		{
			$err = [];
			$name = $POST['name'];
			$email = $POST['email'];
			$subject = $POST['subject'];
			$message = $POST['message'];

		$sql = "INSERT INTO tbl_contactform(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

		// if(mysqli_query($connection,$sql))
		// {
		// 	header("location:http://localhost/Complaint%20Management%20System/contact.php");
		// 	echo "Form submitted successfully";
		// }
		// else{
		// 	header("location:http://localhost/Complaint%20Management%20System/contact.php");
		// 	echo "Error: Could not execute".sql;
		// 	}
		}
	?>
<!-- <div id="preloader"></div> -->
	<section class="sub-header">
		<?php require_once "menu.php"?>
		<h1>Contact us</h1>
	</section>
	<section class="location">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28264.318644842046!2d85.36141298401056!3d27.685163799253843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a419f80aa67%3A0x288ab8841508315f!2sMadhyapur%20Thimi!5e0!3m2!1sen!2snp!4v1622845272658!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>
	<section class="contact-us">
		<div class="row">
			<div class="contact-col">
				<div>
					<i class="fas fa-home"></i>
					<span>
						<h5>XYZ Road,ABC</h5>
						<p>Bhaktapur,Bagmati,NP</p>
					</span>
				</div>
				<div>
					<i class="fas fa-phone"></i>
					<span>
						<h5>
							<a href="tel:+977 9801010101">+977 9801010101</a>
						</h5>
						<p>Sunday to Friday, 10AM to 5PM</p>
					</span>
				</div>
				<div>
					<i class="fas fa-envelope"></i>
					<span>
						<h5>
							<a href="mailto:shtachandrika269@gmail.coms">shtachandrika269@gmail.com</a>
						</h5>
						<p>Email us your query</p>
					</span>
				</div>
			</div>
			<div class="contact-col">
				<form action="contact.php" method="post">
					<input type="text" name="name" placeholder="Enter your name" required>
					<input type="email" name="email" placeholder="Enter email address" required>
					<input type="text" name="subject" placeholder="Enter your subject" required>
					<textarea rows="8" name="message" placeholder="Message" required></textarea>
					<button type="submit" class="btn_submit">Send Message</button>
				</form>
			</div>
		</div>
	</section>
	<section class="footer">
	<h4>About Us</h4>
	<p>
		Complain Management System is the website developed for decreasing the distance between 
		government and public issues<br> which are remained unheard most of the times. So if you
		have something wrong going on in your society,<br> you can complain on our website which 
	    will be solved by government.Thank you!!
	</p>

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
