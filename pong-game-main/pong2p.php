<?php 
session_start();

	include("connection.php");
	include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>2P pong</title>
</head>
<body>
    <style>
		a{
			color: red;
		}
	</style>
<div class="sus">
		<div class="logout">
            <a href="../index.php">Go back</a>
			<a href="../logout.php">Logout</a>
		</div>
		<div class="pagehead">
			<h1>RezonHUB</h1>
		</div>
        <p>Det er to typer pong du kan spille. <strong>spiller mot data</strong>, og <strong>spiller mot spiller</strong></p>
        <button onclick = "window.location.href = 'pong1p.php'">1P</button>
        <button onclick = "window.location.href = 'pong2p.php'">2P</button>
        <p><strong>Kontroller for spiller 1</strong></p>
        <p>Opp: W</p>
        <p>Ned: S</p>
        <p><strong>Kontroller for spiller 2</strong></p>
        <p>Opp: O</p>
        <p>Ned: L</p>
        <!--_th4n_0ne}-->
        <p><strong>Problemer, les FAQ'en vår angånde problemene</strong></p>
		<button onclick = "window.location.href = '../faq.php'">FAQ</button>
</div>
    <div id="container">
        <div id="user-score">0</div>
        <div id="comp-score">0</div>
        <div id="net"></div>
        <div id="user-paddle"></div>
        <div id="comp-paddle"></div>
        <div id="ball"></div>
    </div>

</body>
<script src="scriptMP.js"></script>
</html>