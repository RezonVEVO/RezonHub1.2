<?php
//snakker med databsen
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "applesnacks64";
$dbname = "kubectf";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
