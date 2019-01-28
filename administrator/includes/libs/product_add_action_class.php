<?php
	require_once("../_utils.php");

	function getNewProductId() {
		$newId = getNewId("tbl_products", "pdt_id");
		return $newId;
	}
	
	function insertNewProduct($insertValues, $errorTracker) {
		$sql = "INSERT INTO tbl_products $insertValues";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
	
	function updateProductById($updateValues, $productId, $errorTracker) {
		$sql = "UPDATE tbl_products $updateValues WHERE pdt_id=$productId";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
?>