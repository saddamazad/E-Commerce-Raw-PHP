<?php
	require_once("../libs/login_action_class.php");

	if($_POST[lf_submitBtn] == "Login") {
		// Read the form
		$userEmail = $_POST[lf_userEmailTxt];
		$userPassword = md5($_POST[lf_userPasswordTxt]);
		
		$checkCustomer = isCustomerExist($userEmail, $userPassword);
		if($checkCustomer > 0) {
			$customerInfo = getCustomerInfoById($checkCustomer);
			$_SESSION[userEmail] = $customerInfo->user_email;
			$_SESSION[userName] = $customerInfo->user_name;
			$_SESSION[userId] = $customerInfo->user_id;

			$_SESSION[actionMsg] = '<div class="successMsg">Tahank You for logging in.</div>';
		} else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, wrong email or password.</div>';
		}
		header("Location: ".SITE_URL."login.php");
	} else {
		echo '<h2>You do not have the authority to access this file.</h2>';
	}
?>