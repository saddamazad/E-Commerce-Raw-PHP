<div id="siteMainContainer" class="fLeft">
	<h2>Update Your Profile</h2>
	<?php
		require_once("includes/_app_utils.php");
	
		if($_SESSION[actionMsg] != "") {
			echo $_SESSION[actionMsg];
			$_SESSION[actionMsg] = "";
		}
		
		$customerInfo = getCustomerInfoById($_SESSION[userId]);
	?>
	<form action="includes/models/customer_profile_upadte_action.php" id="profileUpdateForm" name="profileUpdateForm" enctype="multipart/form-data" method="post">
		<fieldset>
			<div class="labelContainer fLeft">
				<label for="cpuf_userNameTxt">Name </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cpuf_userNameTxt" name="cpuf_userNameTxt" value="<?php echo $customerInfo->user_name; ?>" />
			</div>
			<div class="cLeft"></div>
			
			<div class="labelContainer fLeft">
				<label for="cpuf_userEmailTxt">Email </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cpuf_userEmailTxt" name="cpuf_userEmailTxt" value="<?php echo $customerInfo->user_email; ?>" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="cpuf_userAddressTa">Address </label>
			</div>
			<div class="elementContainer fLeft">
				<textarea id="cpuf_userAddressTa" name="cpuf_userAddressTa"><?php echo $customerInfo->user_address; ?></textarea>
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="cpuf_userContactTxt">Phone / Mobile </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cpuf_userContactTxt" name="cpuf_userContactTxt" value="<?php echo $customerInfo->user_contact_no; ?>" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="cpuf_userCityTxt">City / State </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cpuf_userCityTxt" name="cpuf_userCityTxt" value="<?php echo $customerInfo->user_city; ?>" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="cpuf_userCountryTxt">Country </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cpuf_userCountryTxt" name="cpuf_userCountryTxt" value="<?php echo $customerInfo->user_country; ?>" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft"></div>
			<div class="elementContainer fLeft">
				<input type="submit" id="cpuf_submitBtn" name="cpuf_submitBtn" value="Update" class="subBtnController" />
			</div>
			<div class="cLeft"></div>
		</fieldset>
	</form>
</div>
<div class="cLeft"></div>
