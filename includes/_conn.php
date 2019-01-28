<?php
	require_once("_conf.php");
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "enalamode_db";
	
	// Connecting to DB Server
	$conn = mysql_connect($host, $user, $password) or die('Failed to connect database server: '.mysql_error());
	
	// Select application database
	mysql_select_db($database, $conn) or die('Database not found: '.mysql_error());
?>