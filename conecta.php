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

	// $conn = mysqli_connect($hostname, $username, $password, $database);

	// // Check connection
	// if (mysqli_connect_errno())
	// {
	// 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// }

	$conn = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

	mysql_set_charset('utf8', $conn);

	$selected = mysql_select_db($database,$conn) or die("Could not select hermes".mysql_error());
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');



?>