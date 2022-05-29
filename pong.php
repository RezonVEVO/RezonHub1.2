<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!--pong game -->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylelogin.css">
	<title>My website</title>
	<style>
		a{
			color: red;
		}
	</style>
</head>
<body>
	<div class="logout">
        <a href="index.php">Go back</a>
		<a href="logout.php">Logout</a>
	</div>
	<div class="pagehead">
			<h1>RezonHUB</h1>
	</div>

	<h1>Pong</h1>

    <p>No game lmao</p>

    <div class="picture">
        <img src="problem.jpg" alt="">
    </div>

    <p>Go touch some grass xD</p>
    
    <div class="picture">
        <img src="touch-grass.gif" alt="">
    </div>
<p> or HIT THE GYM BRAH</p>
<img src="zyzz.jpg" alt="SIUUUUUUUUU">
</body>
</html>