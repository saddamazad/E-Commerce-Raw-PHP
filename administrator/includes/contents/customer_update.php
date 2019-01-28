<?php
	require_once("includes/_app_utils.php");
	
	if($_GET[aicid] != "" && $_GET[aicid] > 0) {
		if($_GET[aitype] == 1) $updateSql = "SET user_status=2";
		else $updateSql = "SET user_status=1";

		activeInactiveCustomerById($updateSql, $_GET[aicid]);
	}
?>

<h2>Update Customer</h2>

<?php
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
?>

<table align="center" class="recordViewer" cellpadding="5" cellspacing="0" border="1">
<?php
	echo '<tr>
			<th width="30px">Seq</th>
			<th width="150px">Customer Name</th>
			<th width="150px">Customer Email</th>
			<th width="150px">Customer Contact</th>
			<th width="120px">Action</th>
		</tr>';
	echo getCustomersAsTableRow();
?>
</table>