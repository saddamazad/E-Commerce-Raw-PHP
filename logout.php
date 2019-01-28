<?php
	require_once("includes/_conf.php");

	$_SESSION[userEmail] = "";
	$_SESSION[userName] = "";
	$_SESSION[userId] = "";
	$_SESSION[shoppingCartArr] = array(array());
	
	session_destroy;
	
	header("Location: index.php");
?>