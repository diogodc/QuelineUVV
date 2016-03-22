<?php
	$hostname = "localhost";
	$username = "hermes";
	$password = "R@mon19";

	// Create connection
	// $conn = new mysqli($servername, $username, $password);

	$conn = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	// echo "Connected to MySQL<br>";

	$selected = mysql_select_db("penna495_hermes",$conn) or die("Could not select hermes");
	// echo "hermes Selected";

	if ($_SERVER['HTTP_HOST'] == 'localhost') {
		$path = 'http://localhost/Projects/hermes';
	}
	else{
		$path = 'http://www.hermesacademico.com.br';
	}
?>