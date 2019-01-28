<?php
	require_once("../libs/admin_new_action_class.php");

	if($_POST[anaf_submitBtn] == "Add Admin") {
		// Read the form
		$userName = $_POST[anaf_userName];
		$userDesignation = $_POST[anaf_designation];
		$adminType = $_POST[anaf_adminType];
		$userLoginEmail = $_POST[anaf_loginEmail];
		$userPassword = md5($_POST[anaf_password]);
		$userParentId = $_SESSION['loggedAdminId'];
		
		$newAdminId = getNewAdminId();
		
		$insertValues = "VALUES($newAdminId,
								'$userName',
								'$userDesignation',
								'$userLoginEmail',
								'$userPassword',
								$adminType,
								$userParentId,
								now(),
								now(),1 )";
		$insertAction = insertNewAdmin($insertValues, "admin_new_action -15 ");
		if($insertAction) {
			$_SESSION[actionMsg] = '<div class="successMsg">Wow! Insert Operation Done Successfully.</div>';
		} else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Insert Operation Failed.</div>';
		}
		header("Location: ".siteUrl."dashboard.php?page=admin_new");
	} else {
		echo '<h2>This area is only for authorized users.</h2>';
	}
?>