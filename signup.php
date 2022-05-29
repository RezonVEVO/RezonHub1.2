<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//variabler
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		//hash md5 password
		$password = md5($password);

		if(!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name))
		{

			//lagre til database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,email, password) values ('$user_id','$user_name','$email','$password')";

			if($con->query($query)) {
				header("Location: login.php");
			}else{
				$con->error;
				echo "email is taken";
			}
						
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylelogin.css">
	<title>Signup</title>
	<style>
		a{
			color: red;
		}
	</style>
</head>
<body>

	

	<div id="box">
		<!--signup skriv info for å lage en buker som du skal bruke på login-->
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="email" name="email" placeholder="email"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<p>By creating an account you agree to the following <a href="tos.html">Terms Of Service</a></p>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>