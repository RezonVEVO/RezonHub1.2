<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!--html-->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylelogin.css">
	<title>Mail Guide</title>
	<style>
		a{
			color: red;
		}
	</style>
</head>
<body>
<div class="sus">
        <div class="logout">
            <a href="index.php">Go back</a>
		    <a href="logout.php">Logout</a>
	    </div>
    </div>
    <!--mail codene-->
    <div class="info">
        <h1>Mail Structure</h1>
    </div>

    <div class="info">
        <p><strong>Noe galt med siden?</strong></p>
        <p>SiteError</p>
    </div>

    <div class="info">
        <p><strong>Spørsmål angående brukern din?</strong></p>
        <p>UserHelp</p>
    </div>

    <div class="info">
        <p><strong>Bytte av passord</strong></p>
        <p>Change</p>
    </div>

    <div class="info">
        <p><strong>Vill du slette brukern din?</strong></p>
        <p>Removal</p>
    </div>

</body>
</html>