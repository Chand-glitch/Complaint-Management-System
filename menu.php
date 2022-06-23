<nav>
			<a href="index.php"><img src="images/logo.png"></a>
			<div class="nav-links" id="nav-links">
				<i class="far fa-window-close" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.php"> HOME</a></li>
					<li><a href="about.php"> ABOUT</a></li>
					<li><a href="services.php">  SERVICES</a></li>
					<li><a href="form.php">  FORM</a></li>
					<li><a href="contact.php">  CONTACT</a></li>
					<?php
					session_start();
						if(isset($_SESSION['username'])){
					 ?>
								<li><a href="logout.php">  LOGOUT</a></li>
				
					<?php }
						else{
							?> 
								<li><a href="login.php">  LOGIN</a></li>
							<?php 
						}
					?>

				</ul>
			</div>
			<i class="fas fa-bars" onclick="showMenu()"></i>
		</nav>