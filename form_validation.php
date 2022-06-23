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


	if (isset($_POST['btn_submit'])) {
		$err = [];
	
		$name = $_POST['name'];
		$c_detail = $_POST['complain_detail'];
		$c_date =$_POST['complain_date'];
		$c_name =$_POST['complainer_name'];
		$c_phone = $_POST['complainer_phone'];
		$location = $_POST['location'];
		if (isset($_FILES['photo']['error']) && $_FILES['photo']['error'] == 0) 
		{
		//check size
			$photo = '';
			if ($_FILES['photo']['size'] <= 1024000) 
			{
				//check type
				$types = ['image/png','image/jpeg','image/gif','image/jpg'];
				if (in_array($_FILES['photo']['type'], $types))
				 {
					if (file_exists('images/' . $_FILES['photo']['name'])) 
					{
						//generate random file name
						$file_name = uniqid() . '_' .  $_FILES['photo']['name'];
					} 
					else
					 {
						$file_name =  $_FILES['photo']['name'];
					}
					//move to our project folder
					if(move_uploaded_file($_FILES['photo']['tmp_name'], 'Images/' . $file_name))
					{
						$photo = $_FILES['photo']['name'];
					} else 
					{
						$err['photo'] = 'File can not move to our folder';
					}
				} 
				else
				 {
					$err['photo'] = 'Invalid file type';
				}
			} 
			else 
			{
				$err['photo'] = 'Large image size';
			}
		} 
		else
		 {
			$err['photo'] = '';
		}
		

		$sql = "INSERT INTO tbl_complaint (name,complaint_detail,photo,complaint_date,complainer_name,complainer_phone,location) VALUES ('$name','$c_detail','$photo','$c_date','$c_name','$c_phone','$location')";

		// if(mysqli_query($connection,$sql)){
		// 	echo "Complain submitted successfully";
		// }	
		// else{
		// 	echo "Error: Could not execute".$sql;
		// }
	}
?>
