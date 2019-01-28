<?php
	require_once("_conn.php");
	
	// function to generate new id to be used as a primary key
	function getNewId($tableName, $primaryKeyFieldName) {
		$sql = "SELECT MAX($primaryKeyFieldName) AS maxCurrentIdValue FROM $tableName";
		$record = getSingleRecordQuery($sql, "_utils-7");
		return ($record->maxCurrentIdValue + 1);
	}

	// function to execute any select query
	function getSingleRecordQuery($sql, $errorTracker) {
		$rs = mysql_query($sql) or die('Error in Select Query ['.$errorTracker.']: '.mysql_error());
		return mysql_fetch_object($rs);
	}
	// function to execute any select query and return multiple values as object array
	function getRecords($sql, $errorTracker) {
		$resultObjArray = array();
		$rs = mysql_query($sql) or die('Error in Select Query ['.$errorTracker.']: '.mysql_error());
		$i = 0;
		while($record = mysql_fetch_object($rs)) {
			$resultObjArray[$i] = $record;
			$i++;
		}
		return $resultObjArray;
	}
	
	// funtion to execute insert/delete/update operation
	function executeQuery($insertQuery, $errorTracker) {
		$result = mysql_query($insertQuery) or die('Error in Insert/Delete/Update Query ['.$errorTracker.']: '.mysql_error());
		return $result;
	}
	

	// my created function
	function getAllRecords($sql, $errorTracker) {
		$resultObjArray = array();
		$result = mysql_query($sql) or die('Error in SELECT query - ['.$errorTracker.']'.mysql_error());
		$i = 0;
		while($recObj = mysql_fetch_object($result)) {
			$resultObjArray[$i] = $recObj;
			$i++;
		}
		return $resultObjArray;
	}
?>