<?php
	require_once("../_utils.php");
	
	function updateAdminName($updateValue, $errorTracker, $adminId) {
		$sql = "UPDATE tbl_admins ".$updateValue." WHERE admin_id=$adminId";
		return executeQuery($sql, $errorTracker);
	}
	function updateAdminEmail($updateValue, $errorTracker, $adminId) {
		$sql = "UPDATE tbl_admins ".$updateValue." WHERE admin_id=$adminId";
		return executeQuery($sql, $errorTracker);
	}
	function updateAdminDesignation($updateValue, $errorTracker, $adminId) {
		$sql = "UPDATE tbl_admins ".$updateValue." WHERE admin_id=$adminId";
		return executeQuery($sql, $errorTracker);
	}

?>