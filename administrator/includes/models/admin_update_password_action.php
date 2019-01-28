<?php
	require_once("../libs/admin_update_password_class.php");
	
	if($_POST['uapf_submitBtn'] == "Update") {
		// Read data from form
		$adminId = $_POST['uapf_adminId'];
		$adminOldPassword = md5($_POST['uapf_adminOldPassword']);
		$adminNewPassword = md5($_POST['uapf_adminNewPassword']);
		/*
		if($adminPassword == "") {
			$adminPassword = $_POST['uapf_adminPass'];
		} else {
			$adminPassword = md5($_POST['uapf_adminPassword']);
		}	
		*/
		$checkPassword = checkOldPassword($adminOldPassword);
		if($checkPassword > 0) {
			$updateValue = "SET admin_password='$adminNewPassword'";
			$insertValue = updateAdminPassword($updateValue, 'admin_update_password_action-19', $adminId);
			if($insertValue) {
				$_SESSION[actionMsg] = '<div class="successMsg">Update Done Successfully.</div>';
			} else {
				$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Update Failed.</div>';
			}
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Old Password Did Not Match.</div>';
		}
		header("Location: ".siteUrl."dashboard.php?page=admin_update_password");
	}
?>