<?php
	require_once("includes/_utils.php");

	function performLoginAction($sql, $errorTraker) {
		$record = getSingleRecordQuery($sql, $errorTraker);  // this is a function
		if($record->admin_id > 0) {
			$_SESSION['loggedAdminId'] = $record->admin_id;
			$_SESSION['loggedAdminName'] = $record->admin_name;
			$_SESSION['loggedAdminEmail'] = $record->admin_login_email;
			$_SESSION['loggedAdminType'] = $record->admin_type;
			$_SESSION['loggedAdminDesignation'] = $record->admin_designation;
	
			header("Location: ".siteUrl."dashboard.php");			
			
		}else {
			$_SESSION[actionMsg] = "Sorry, Login Failed. Please retype your login email and password correctly.";
		}
	}
?>