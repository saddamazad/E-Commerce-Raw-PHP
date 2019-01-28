<?php
	require_once("../_utils.php");
	
	function isCustomerExist($userEmail, $userPassword) {
		$sql = "SELECT user_id FROM tbl_customer_registrations 
				WHERE user_email='$userEmail' AND user_password='$userPassword'";
		$result = getSingleRecord($sql, "login_action_class - 5");
		return $result->user_id;
	}
	
	function getCustomerInfoById($customerId) {
		$sql = "SELECT * FROM tbl_customer_registrations WHERE user_id=$customerId";
		$result = getSingleRecord($sql, "login_action_class - 12");
		return $result;
	}
?>