<?php
	require_once("../_utils.php");
	
	function getNewPrimaryKeyId($tableName, $primaryKeyFieldName) {
		$newPrimaryKeyId = getNewId($tableName, $primaryKeyFieldName);
		return $newPrimaryKeyId;
	}
	
	function addCategoryToDB($insertValuesql, $errorTracker) {
		$sql = "INSERT INTO tbl_categories $insertValuesql";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
	
	function updateCategoryById($updateValues, $categoryId, $errorTracker) {
		$sql = "UPDATE tbl_categories $updateValues WHERE cat_id=$categoryId";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
?>