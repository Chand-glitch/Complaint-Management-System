<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'db_cms';

	$connection = new mysqli($server,$username,$password,$database);
	if($connection -> connect_errno !=0)
	{
		die('Connection error ');

	}

	if(!mysqli_select_db($connection,'db_cms')){
		echo 'Database not selected';
	}
	?>
	<?php require_once "dashmenu.php" ?>
	<div class="main">
			<?php 
				echo "Recent Tasks";
				$sql = "SELECT * FROM tbl_complaint";
				$result = $connection->query($sql);
				$data = [];


				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						array_push($data, $row);
					}
				}
				?> 
				<table border=1 class="tab">
				    <tr>
				        <td>ID</td>
				        <td>Name</td>
				        <td>Detail</td>

				    </tr>

				<?php
				foreach($data as $key => $value){
				    echo "<tr><td>".$value['id']."</td><td>".$value['name']."</td><td>".$value['complaint_detail']."</td></tr> ";
				} ?>

				</table>
	</div>
	<!-- <div class="main">
			<div class="topbar">
				<div class="toggle" onclick="toggleMenu();">
					<div class="search">
						<label>
							<input type="text" name="" placeholder="Seach here">
							<i class="fas fa-search"></i>
						</label>
						
					</div>

					<div class="user">
							<img src="images/user.jpeg">							
						</div>
				</div>
				
			</div>
		<div class="details">
			<div class="recentOrders">
				<div class="cardHeader">
					<h2>Recent Complaints</h2>
					<table>
						
					</table>
				</div>
			</div>
		</div>
		
	</div>
<script type="text/javascript">
	function toggleMenu()
	{
		let toggle = document.querySelector('toggle');
		let navigation = document.querySelector('navigation');
		let main = document.querySelector('main');
		toggle.classList.toggle('active');
		navigation.classList.toggle('active');
		main.classList.toggle('active');
	}
</script> -->
</body>
</html>