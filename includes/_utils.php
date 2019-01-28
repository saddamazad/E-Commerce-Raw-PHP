<?php
	require_once("_conn.php");
	
	// funtion to execute insert/delete/update operation
	function executeQuery($query, $errorTracker) {
		$result = mysql_query($query) or die('Error in Insert/Delete/Update query ['.$errorTracker.']: '.mysql_error());
		return $result;
	}
	
	function getSingleRecord($sql, $errorTracker) {
		$result = mysql_query($sql) or die('Error in SELECT query ['.$errorTracker.']: '.mysql_error());
		$recObj = mysql_fetch_object($result);
		return $recObj;
	}
	
	function getNewId($tableName, $primaryKeyFieldName) {
		$sql = "SELECT MAX($primaryKeyFieldName) AS currentMaxId FROM $tableName";
		$result = getSingleRecord($sql, "_utils - 17");
		$newId = $result->currentMaxId + 1;
		return $newId;
	}
	
	function getAllRecords($sql, $errorTracker) {
		$recObjArr = array();
		$records = mysql_query($sql) or die('Problem in SELECT query ['.$errorTracker.']'.mysql_error());
		$i = 0;
		while($recObj = mysql_fetch_object($records)) {
			$recObjArr[$i] = $recObj;
			$i++;
		}
		return $recObjArr;
	}
?>