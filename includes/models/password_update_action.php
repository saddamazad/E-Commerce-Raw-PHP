<?php
	require_once("../libs/password_update_action_class.php");
	
	if($_POST[puf_submitBtn] == "Update") {
		// Read the form 
		$oldPassword = md5($_POST[puf_userPasswordTxt]);
		$newPassword = md5($_POST[puf_userConfPassTxt]);
		
		$checkOldPassword = isOldPasswordCorrect($oldPassword);
		if($checkOldPassword == $_SESSION[userId]) {
			$updateValue = "SET user_password='$newPassword'";
			
			$updateAction = updateUserPasswordById($updateValue, $_SESSION[userId], "password_update_action_class -11 ");
			if($updateAction) {
				$_SESSION[actionMsg] = '<div class="successMsg">Your password has been updated. </div>';
			}else {
				$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Update operation failed. </div>';
			}
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, old password did not match </div>';
		}
		header("Location: ".SITE_URL."customer_password_update.php");
	} else {
		echo '<h2>This area is only for authorized users.</h2>';
	}
?>