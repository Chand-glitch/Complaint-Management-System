

<?php 
session_start();

// connection
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'db_cms';

$connection = new mysqli($server,$username,$password,$database);
if($connection -> connect_errno !=0)
	{
		die('Connection error ');

	}

if(!mysqli_select_db($connection,'db_cms'))
	{
		echo 'Database not selected';
	}


// singup	

	if(isset($_POST['btn_signup']))
	{
		$err = [];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed = password_hash($password,PASSWORD_DEFAULT);

		$sql = ("INSERT INTO usertable(fname,lname,username,password) VALUES ('$fname','$lname','$username','$hashed')");

		if(mysqli_query($connection,$sql))
		{
			header("location:http://localhost/Complaint%20Management%20System/signup.php");
			echo "<script>alert('Signed Up Successfully');</script>";
		}
		else
		{	header("location:http://localhost/Complaint%20Management%20System/signup.php");
			echo "<script>alert(Error: Signing Up failed".$sql."');</script>";
			// echo "Error: Signing Up failed".$sql;
		}
	}

// login

	

	if (isset($_POST['login-btn'])) {
		$err = [];
		$username =  mysqli_real_escape_string($connection, $_POST['username']);
		$password =  mysqli_real_escape_string($connection, $_POST['password']);
        $check_username = "SELECT * FROM usertable WHERE username = '$username'";
        $res = mysqli_query($connection, $check_username);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
            	 header('location: index.php');
            }else{
                $err['er']="<p style='color:red!important;'>Incorrect username or password! </p>";
            }
        }else{
            $err['er']= " <p style='color:red!important;'> It's look like you're not yet a member! Click on the bottom link to signup. </p>";
        }	
		
}

?>
