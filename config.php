<?php

$servername = "localhost";
$username = "id16754771_aniket";
$password = "!/NP\_>r4|3/g@C|";
$dbname = "id16754771_bank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}

?>