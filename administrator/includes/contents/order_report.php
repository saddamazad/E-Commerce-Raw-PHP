<h2>Order Report</h2>
<?php
	require_once("includes/_app_utils.php");
	
	if($_GET[ioid] != "" && $_GET[ioid] > 0) {
		$updateValue = "SET order_status=1";
		$updateStatus = updateOrderStatusById($updateValue, $_GET[ioid]);
	}elseif($_GET[poid] != "" && $_GET[poid] > 0) {
		$updateValue = "SET order_status=2";
		$updateStatus = updateOrderStatusById($updateValue, $_GET[poid]);
	}elseif($_GET[proid] != "" && $_GET[proid] > 0) {
		$updateValue = "SET order_status=3";
		$updateStatus = updateOrderStatusById($updateValue, $_GET[proid]);
	}elseif($_GET[coid] != "" && $_GET[coid] > 0) {
		$updateValue = "SET order_status=4";
		$updateStatus = updateOrderStatusById($updateValue, $_GET[coid]);
	}elseif($_GET[cnoid] != "" && $_GET[cnoid] > 0) {
		$updateValue = "SET order_status=5";
		$updateStatus = updateOrderStatusById($updateValue, $_GET[cnoid]);
	}

	
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
	
	echo '<table align="center" class="recordController" cellpadding="5" cellspacing="0" border="1">
			<tr>
				<th width="75px">Order Detail ID</th>
				<th width="100px">Order ID</th>
				<th width="80px">Customer ID</th>
				<th width="80px">Product ID</th>
				<th width="100px">Product Quantity</th>
				<th width="65px">Status</th>
				<th width="250px">Action</th>
			</tr>';
	echo getOrdersAsTableRow();
	echo '</table>';
?>