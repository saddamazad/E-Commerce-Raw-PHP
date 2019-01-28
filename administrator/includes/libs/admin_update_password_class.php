<?php
	require_once("../_utils.php");

	function checkOldPassword($adminOldPassword) {
		$sql = "SELECT admin_password FROM tbl_admins WHERE admin_password='$adminOldPassword'";
		$record = getSingleRecordQuery($sql, "admin_update_password_class-5");
		return $record->admin_password;
	}
	
	function updateAdminPassword($updateValue, $errorTracker, $adminId) {
		$sql = "UPDATE tbl_admins ".$updateValue." WHERE admin_id=$adminId";
		return executeQuery($sql, $errorTracker);
	}
?>