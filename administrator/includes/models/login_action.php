<?php
	require_once("includes/libs/login_class.php");

	function doLogin($loginEmail, $loginPass) {
		$sql = "SELECT * 
				FROM tbl_admins 
				WHERE admin_login_email='$loginEmail' 
				AND admin_password='$loginPass' 
				AND admin_status=1";
		performLoginAction($sql, 'login_action-10');	// Inputting values to the parameters.
	}
?>