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
	<?php require_once "form_validation.php"?>
	<!-- <div id="preloader"></div> -->
<div class="form-wrapper">
	<div class="sub-header">
		<?php require_once "menu.php" ?>
		<h1>Complain Form</h1>
	</div>
	<div class="formCenter">
	<form action="form.php" method="POST" enctype="multipart/form-data" class="inner-form">
		<!-- <h1>Complain Form</h1> -->
			<label>Username:</label>
			<input type="text" name="complainer_name" placeholder="Enter your name"></br>

			<label>Phone no.:</label>
			<input type="text" name="complainer_phone" placeholder = "Enter your phone number"></br>

			<label>Type:</label>
			<select name="name">
				<option>Department Of Electricity Development</option>
				<option>Department Of Roads</option>
				<option>Department of Forests and Soil Conservation</option>
				<option>Department of Water Supply & Sewerage Management</option>
				<option>Department of National Parks and Wildlife Conservation</option>
				<option>Department of Waste Management</option>
			</select></br>
			<label>Location:</label>
			<input type="text" name="location" placeholder="Enter the location"></br>

			<label>Description:</label>
			<textarea name="complain_detail" placeholder="Describe the problem" rows="8"></textarea></br>

			<label>Photo:</label>
			<input type="file" name="photo"></br>
			<?php
				if(isset($err['photo'])){
					echo $err['photo'];
				}
			?>
			<label>Date:</label>
			<input type="Date" name="complain_date"></br>

			
		
			<button type="submit" name="btn_submit" class ="btn_submit" value="Submit">Submit </button>
			<button type="reset" name="btn_reset" class="btn_reset" value="Cancel">Cancel</button>
	</form>

</div>
<!-- <br> -->

<section class="complains">

	<!-- <?php
		$sql = "select * from tbl_complaint";
		$result = $connection->query($sql);
		$data=[];

		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc()){
				//array_push($data,$row);
			?>
			<div>
				<?php echo $row['complaint_date']; ?>
				<?php echo $row['complaint_detail']; ?>
				<?php echo $row['complainer_name']; ?>
				 <?php echo $row['status'];?> 
		<?php	}
		}
			?> -->
</section>

<div class="footer">
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
</div>
</div>
	<!-- <script src="js/preloader.js">
		
	</script> -->
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