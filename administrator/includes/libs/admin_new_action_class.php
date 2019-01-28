<?php
	require_once("../_utils.php");
	
	function getNewAdminId() {
		$newId = getNewId("tbl_admins", "admin_id");
		return $newId;
	}
	
	function insertNewAdmin($insertValues, $errorTracker) {
		$sql = "INSERT INTO tbl_admins $insertValues";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
?>