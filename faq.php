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
	<title>Frequently asked questions</title>
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
    <div class="info">
        <h1>FAQ</h1>
    </div>
        <!--faq'en-->
    <div class="info">
        <p><strong>Hvorfor trenger jeg en bruker?</strong></p>
        <p>Fordi oppgaven krever det.</p>
    </div>

    <div class="info">
        <p><strong>Hva brukes informasjonen min til?</strong></p>
        <p>Absolutt ignen ting.</p>
    </div>

    <div class="info">
        <p><strong>Er konto inforamasjonen min trygg?</strong></p>
        <p>Ja kontoen din er trygg, den er oppbevart i en database. Sansyneligheten for at noen vill bryte seg inn er liten, men hvis det skjer så er passordene PEQ hashet. Det vill si angripern vill se brukernavnet, men har ikke tilgang til passordet.</p>
    </div>
    
    <div class="info">
        <p><strong>Hvorfor ser siden så utrygg ut, og hvorfor sier browsern min at connection is not secure?</strong></p>
        <p>Siden ser utrygg ut siden jeg gidder ikke å fikkle rundt med CSS og få ting til å se fint ut. Grunnen til at browsern din sier "Connection is not secure" er fordi siden er http, ikke https. Det vill si at noen kan se informasjonen som du sender gjennom RezonHub. På grunn av dette ville jeg ha brukt et annet passord her en det du bruker til banken.</p>
    </div>
    
    <div class="info">
        <p><strong>Hva sa jeg ja til når jeg lagde brukern min?</strong></p>
        <p>Greier</p>
    </div>
    
    <div class="info">
        <p><strong>Vill jeg få spam mail?</strong></p>
        <p>Nei, bruker bare mail for å ikke ha repeterende brukere.</p>
    </div>

    <div class="info">
        <p><strong>Er ikke spørsmålet ditt her?</strong></p>
        <p>Ta kontakt på mail "lilrezonvevo@gmail.com".</p>
        <p>Skriv riktig subject på mailen, hvis ikke blir mailen din ignorert. See <a href="mailguide.php" target="_blank">her</a> for subjecter</p>
    </div>
    
</body>
</html>