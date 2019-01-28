<?php
	require_once("../_utils.php");
	
	function getNewOrderId() {
		$newId = getNewId("tbl_orders", "order_id");
		return $newId;
	}
	
	function insertOrder($insertValues, $errorTracker) {
		$sql = "INSERT INTO tbl_orders $insertValues";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
	
	function getNewOrderDlId() {
		$newId = getNewId("tbl_order_detail", "order_dl_id");
		return $newId;
	}
	
	function getProductInfoById($productId) {
		$sql = "SELECT * FROM tbl_products WHERE pdt_id=$productId";
		$record = getSingleRecord($sql, "checkout_action_class -21 ");
		return $record;
	}

	function insertOrderDl($insertValues, $errorTracker) {
		$sql = "INSERT INTO tbl_order_detail $insertValues";
		$result = executeQuery($sql, $errorTracker);
		return $result;
	}
	
?>