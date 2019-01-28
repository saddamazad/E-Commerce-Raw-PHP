<?php
	require_once("../libs/reg_action_class.php");

	if($_POST[suf_submitBtn] == "Sign Me Up") {
		// Read the form
		$userName = $_POST[suf_userNameTxt];
		$userEmail = $_POST[suf_userEmailTxt];
		$userConfPass = md5($_POST[suf_userConfPassTxt]);
		$userAddress = $_POST[suf_userAddressTa];
		$userContact = $_POST[suf_userContactTxt];
		$userCity = $_POST[suf_userCityTxt];
		$userCountry = $_POST[suf_userCountryTxt];
		
		// Generate new primary key id
		$newPrimaryKeyId = getNewId("tbl_customer_registrations", "user_id");
		
		// Insert the data's into db
		$insertValues = "VALUES ($newPrimaryKeyId,
								 '$userName',
								 '$userEmail',
								 '$userConfPass',
								 '$userAddress',
								 '$userContact',
								 '$userCity',
								 '$userCountry',
								 now(),
								 now(),1 )";
		$insertOperation = insertFormValues($insertValues, "reg_action - 16");
		if($insertOperation) {
			$_SESSION[actionMsg] = '<div class="successMsg">Congratulations, Your registration completed successfully.</div>';
		} else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Registration Operation Failed.</div>';
		}
		header("Location: ".SITE_URL."registration.php");
	} else {
		echo '<h2>You do not have the authority to access this file.</h2>';
	}
?>