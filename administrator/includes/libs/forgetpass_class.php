<?php
	require_once("../_utils.php");
	
	function updateCustomerPassword($updateValue, $customerEmail, $errorTracker) {
		$sql = "UPDATE tbl_admins $updateValue WHERE admin_login_email='$customerEmail' 
				AND admin_status=1";
		return executeQuery($sql, "forgetpass_class-5");
	}

?>