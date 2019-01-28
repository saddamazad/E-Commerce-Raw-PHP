<?php
	require_once("../libs/forgetpass_class.php");
	
	if($_POST[npf_submitBtn] == "Submit") {
		// Read Form Data
		$newPassword = md5($_POST[npf_newPassword]);
		$customerEmail = $_POST[npf_hiddenEmail];
		$updateValue = "SET admin_password='$newPassword'";
		
		$updatePassword = updateCustomerPassword($updateValue, $customerEmail, 'forgetpass_action-8');
		if($updatePassword) {
			$_SESSION['actionMsg'] = '<div class="successMsg">Update Done Successfully. Now login your account with this new password</div>';
		}else {
			$_SESSION['actionMsg'] = '<div class="errorMsg">Sorry, Update Failed.</div>';
		}
		header("Location: ".siteUrl);
	}
?>