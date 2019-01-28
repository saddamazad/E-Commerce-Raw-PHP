<?php
	require_once("../libs/customer_profile_update_action_class.php");
	
	if($_POST[cpuf_submitBtn] == "Update") {
		// Read the form
		$userName = $_POST[cpuf_userNameTxt];
		$userEmail = $_POST[cpuf_userEmailTxt];
		$userAddress = $_POST[cpuf_userAddressTa];
		$userContact = $_POST[cpuf_userContactTxt];
		$userCity = $_POST[cpuf_userCityTxt];
		$userCountry = $_POST[cpuf_userCountryTxt];
		
		$userId = $_SESSION[userId];
		
		$updateValue = "SET user_name='$userName',
							user_email='$userEmail',
							user_address='$userAddress',
							user_contact_no='$userContact',
							user_city='$userCity',
							user_country='$userCountry',
							user_udate=now() ";
		$updateAction = updateCustomerById($updateValue, $userId, "customer_profile_update_action -15 ");
		if($updateAction) {
			$_SESSION[actionMsg] = '<div class="successMsg"> Your profile has been updated successfully.</div>';
		} else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Update Operation Failed.</div>';
		}
		header("Location: ".SITE_URL."customer_profile_update.php");
	} else {
		echo '<h2>This area is only for authorized users.</h2>';
	}
?>