<h2>Order Report Processing</h2>
<?php
	require_once("includes/_app_utils.php");
	
	echo '<table align="center" class="recordController" cellpadding="5" cellspacing="0" border="1">
			<tr>
				<th width="100px">Order ID</th>
				<th width="100px">Customer ID</th>
				<th width="150px">Delivery Address</th>
				<th width="150px">Customer Email</th>
				<th width="100px">Customer Contact</th>
				<th width="150px">Status</th>
			</tr>';	
	echo getOrderProcessingAsTableRow();
	echo '</table>';
?>