<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css\fontawesome-free-5.15.3-web\css\all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
<div class="login-form">
	<h1>Admin Login</h1>
	<form action="dashboard.php" method="post">
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<button class="login-btn">Login</button>
	</form>
</div>
</body>
</html>
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
	session_start();
	if(isset($_SESSION['username'])){
		header('location:dashboard.php');
	}

	if (isset($_POST['login-btn'])) {
		$err = [];
		$username = $_POST['username'];
		$password = $_POST['password'];
        $check_username = "SELECT * FROM tbl_login WHERE username = '$username'";
        $res = mysqli_query($con, $check_username);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['username'] = $username;
                $status = $fetch['status'];
            }else{
                echo "Incorrect username or password!";
            }
        }else{
            echo "It's look like you're not yet a member! Click on the bottom link to signup.";
        }	
		
}

?>
