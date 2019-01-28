<?php
	require_once("../_utils.php");
	
	function isOldPasswordCorrect($oldPassword) {
		$userEmail = $_SESSION[userEmail];
		$sql = "SELECT * FROM tbl_customer_registrations
				WHERE user_email='$userEmail' AND user_password='$oldPassword'";
		$record = getSingleRecord($sql, "password_update_action_class -6 ");
		if($record > 0) {
			$userId = $record->user_id;
			return $userId;
		}
	}
	
	function updateUserPasswordById($updateValue, $userId, $errorTracker) {
		$sql = "UPDATE tbl_customer_registrations $updateValue
				WHERE user_id=$userId";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
	
?>