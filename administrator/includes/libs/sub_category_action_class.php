<?php
	require_once("../_utils.php");
	
	function getNewSubcatId($tableName, $primaryKeyFieldName) {
		$newId = getNewId($tableName, $primaryKeyFieldName);
		return $newId;
	}
	
	function insertSubCategory($insertValues, $errorTracker) {
		$sql = "INSERT INTO tbl_sub_categories $insertValues";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
	
	function updateSubCategoryById($updateValues, $subcatId, $errorTracker) {
		$sql = "UPDATE tbl_sub_categories $updateValues WHERE subcat_id=$subcatId";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
?>