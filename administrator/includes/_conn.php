<?php
	require_once("_conf.php");

	// Variable Initialization
	$dbUser = "root";
	$dbUserPass = "";
	$dbName = "enalamode_db";
	$dbHost = "localhost";
	
	// Connecting to DB Server
	$conn = mysql_connect($dbHost, $dbUser, $dbUserPass) or die("Failed to connect db server: ".mysql_error());

	// Select application database
	mysql_select_db($dbName, $conn) or die("Database Name Error: ".mysql_error());
?>