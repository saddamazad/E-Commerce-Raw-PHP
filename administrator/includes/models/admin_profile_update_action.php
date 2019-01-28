<?php
	require_once("../libs/admin_profile_update_class.php");
	
	if($_POST['uanf_submitBtn'] == "Update") {
		// Read data from Form
		$adminId = $_POST['uanf_adminId'];
		$adminName = $_POST['uanf_adminNameTxt'];
		
		$updateValue = "SET admin_name='$adminName',
							admin_udate=now() ";
		
		$insertValue = updateAdminName($updateValue, 'admin_profile_update_action-9', $adminId);
		if($insertValue) {
			$_SESSION['actionMsg'] = '<div class="successMsg">Update Done Successfully.</div>';
		} else {
			$_SESSION['actionMsg'] = '<div class="errorMsg">Sorry, Update Failed.</div>';
		}
		header("Location: ".siteUrl."dashboard.php?page=admin_profile_update");
	} elseif($_POST['uaef_submitBtn'] == "Update") {
		// Read data from Form
		$adminId = $_POST['uaef_adminId'];
		$adminEmail = $_POST['adminEmailTxt'];
		
		$updateValue = "SET admin_login_email='$adminEmail',
							admin_udate=now() ";
		
		$insertValue = updateAdminEmail($updateValue, 'admin_profile_update_action-23', $adminId);
		if($insertValue) {
			$_SESSION['actionMsg'] = '<div class="successMsg">Update Done Successfully.</div>';
		} else {
			$_SESSION['actionMsg'] = '<div class="errorMsg">Sorry, Update Failed.</div>';
		}
		header("Location: ".siteUrl."dashboard.php?page=admin_profile_update");
	} elseif($_POST['uadf_submitBtn'] == "Update") {
		// Read data from Form
		$adminId = $_POST['uadf_adminId'];
		$adminDesignation = $_POST['adminDesignationTxt'];
		
		$updateValue = "SET admin_designation='$adminDesignation',
							admin_udate=now() ";
		
		$insertValue = updateAdminDesignation($updateValue, 'admin_profile_update_action-37', $adminId);
		if($insertValue) {
			$_SESSION['actionMsg'] = '<div class="successMsg">Update Done Successfully.</div>';
		} else {
			$_SESSION['actionMsg'] = '<div class="errorMsg">Sorry, Update Failed.</div>';
		}
		header("Location: ".siteUrl."dashboard.php?page=admin_profile_update");
	}
?>