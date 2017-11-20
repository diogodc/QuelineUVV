<?php


	if ($_SERVER['HTTP_HOST'] == 'localhost') {

		$path = 'http://localhost/Projects/hermes';
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$database = "hermes";

	}
	else{

		$path = 'http://www.hermesacademico.com.br';
		$hostname = "localhost";
		$username = "penna495_root";
		$password = "R@mon1901";
		$database = "penna495_hermes";

	}

	// Create connection
	$conn = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	// echo "Connected to MySQL<br>";

	$selected = mysql_select_db($database,$conn) or die("Could not select hermes".mysql_error());
	// echo "hermes Selected";
?>
