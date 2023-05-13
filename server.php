<?php
session_start();

//connect to database

$db = mysqli_connect('localhost','root','','covictory');

//register user in from registration page
if (isset($_POST['register'])) 
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];

	

	if ($password_1 != $password_2) 
	{
	
			header("location:sign-up.php?err2=1");
	}
else
	{
		$password = md5($password_1);
		$sql = "INSERT INTO user(fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
		mysqli_query($db,$sql);
		header('location:Login.php?suc=1');
	}
}
//log user in from login page
	if (isset($_POST['login'])) 
	{
		$username = $_POST['unm'];
		$password = $_POST['pwd'];

			$password = md5($password); //encrypt the password
			$query = "select * from user where email='$username' AND password='$password'";
			$result = mysqli_query($db,$query);

			if (mysqli_num_rows($result) == 1) 
			{
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "you are now logged in";
				header('location: index.php');
			}
			else
			{
				header("location:Login.php?err=1");
			}
	}
?>