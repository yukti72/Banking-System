<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "indianbank";

	//$servername = "sql6.freemysqlhosting.net";
	//$username = "sql6398221";
	//$password = "N9wUjbPLBc";
	//$dbname = "sql6398221";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>