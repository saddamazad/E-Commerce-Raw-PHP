<?php
	require_once("includes/_conf.php");
	$_SESSION[loggedAdminId] = "";
	$_SESSION[loggedAdminName] = "";
	$_SESSION[loggedAdminEmail] = "";
	$_SESSION[loggedAdminType] = "";

	header("Location: ".siteUrl);			
?>