<?php
	require_once("../_utils.php");
	
	function updateCustomerById($updateValue, $userId, $errorTracker) {
		$sql = "UPDATE tbl_customer_registrations $updateValue WHERE user_id=$userId";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
?>