<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	//Flagene
	$flag = array("KUBE{n4n0m4ch1n35_50n}", "KUBE{0rd_k4n_3r5t47te_74ll}", "KUBE{7h4t5_4_t0rt01s3}", "KUBE{tw0_15_b3t73r_th4n_0ne}", "'*")
	


?>
<!--CTF-->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylelogin.css">
	<title>CTF</title>
	<style>
		a{
			color: red;
		}
	</style>
</head>
<body>
<!-- amongus-->
<div class="sus">
	<div class="logout">
        <a href="index.php">Go back</a>
		<a href="logout.php">Logout</a>
	</div>
	<div class="pagehead">
			<h1>RezonHUB</h1>
	</div>

	<h1>CTF</h1>

    <p>Velkommen til CTF. I denne CTF-en skal du lete etter flag som er skjulte i filer.<br>
        Alle verktøy er tillat. Under finner du en download for en zip mappe med mapper som hver inneholder sin oppgave.<br>
        Når du tror du har finnet flagget kan du bruke flagg chekern til å se om du fikk riktig flagg.
	</p>
	<p>SAFE PUNJABI NO VIRUS</p>
    <a download="CTF_tasks.zip" href="CTF_tasks.zip" title="DownloadButton">
		<img alt="DownloadButton" src="downloadbtn.gif" style="width:30%">
	<a>
	<form method = "post">
		<input id="text" type="text" name="svar" placeholder="enter a flag"><br></br>

		<?php 
		// snakker med datbasen
			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				//henter data fra inputten for å sjekke om svaret er riktig:)))
				$flag_name = $_POST['svar'];
				//Sjekk om input er tom
				if(!empty($flag_name))
				{
				
					if($flag_name === $flag[0])
					{
						echo "<script>window.alert('You solved Stenography')</script>";
					}elseif($flag_name === $flag[1])
					{
						echo "<script>window.alert('You solved Crypto Forrvirring')</script>";
					}elseif($flag_name === $flag[2])
					{
						echo "<script>window.alert('You solved Fibonacci Sequence')</script>";
					}elseif($flag_name === $flag[3])
					{
						echo "<script>window.alert('What's this, a secret??')</script>";
					}elseif($flag_name === $flag[4])
					{
						echo "<script>window.alert('Bro fr xD, fookin DONUT yee')</script>";
					}
					else{
						echo"<script>window.alert('Not quite right')";
					}
					
					
					
				}else
				{
					echo "<script>window.alert('C'mon atleast type something')</script>";
				}
			}
		
		?>
	<!-- submit knapp-->
		<input id="button" type="submit" value="check">

	</form>
	
	

</div>  
</body>
</html>