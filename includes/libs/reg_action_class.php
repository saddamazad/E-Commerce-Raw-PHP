<?php
	require_once("../_utils.php");
	
	function insertFormValues($insertValues, $errorTracker) {
		$sql = "INSERT INTO tbl_customer_registrations $insertValues";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
?>