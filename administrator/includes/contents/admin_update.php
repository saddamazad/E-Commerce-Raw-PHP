<?php require_once("includes/_app_utils.php"); ?>

<h2>Update Admins</h2>
<?php
	if($_GET['aiaid'] != "" && $_GET['aiaid'] > 0) {
		if($_GET['aitype'] == 0) $updateValue = "SET admin_status=1";
		else $updateValue = "SET admin_status=0";
		activeInactiveAdminById($updateValue, $_GET['aiaid']);
	}
	
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
?>

<!-- Listing Admins -->
<?php
	if($trigger != 1) {
		echo '<table class="recordController" cellpadding="5" border="1">
			<tr>
				<th width="30px">Seq</th>
				<th width="150px">Admin Name</th>
				<th width="60px">Designation</th>
				<th width="140px">Login Email</th>
				<th width="120px">Admin Type</th>
				<th width="160px">Admin Parent</th>
				<th width="140px">Action</th>
			</tr>';
			echo getAdminsAsTableRow();
			echo '</table>';
	}
?>
