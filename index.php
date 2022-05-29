<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!--download siden med spillet-->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylelogin.css">
	<title>Home Page</title>
	<style>
		a{
			color: red;
		}
	</style>
</head>
<body>
	<div class="sus">
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
		<div class="pagehead">
			<h1>RezonHUB</h1>
		</div>

		
		<p>Hello, <?php echo $user_data['user_name']; ?></p>
		
		<p>Klikk på et av valgene under for å ha det gøy. 
		<br>(endringer skal bli gjort)
		</p>
	
		<!--referer til andre sider (enten spill eller andre sider)-->
		<button onclick = "window.location.href = 'ctf.php'">CTF</button>

		<button onclick = "window.location.href = 'pong-game-main/pong1p.php'">Pong</button>

		<h1>Spar spørsmålene dine lille unge</h1>
		<p>Les FAQ-en først</p>
		<button onclick = "window.location.href = 'faq.php'">FAQ</button>

		<h1>TOS</h1>
		<p>Vill du lese Terms Of Servicen igjen lille gamer??</p>
		<button onclick = "window.location.href = 'tos.php'">TOS</button>
	</div>


</body>
</html>