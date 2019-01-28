<div id="siteMainContainer" class="fLeft">
	<?php
		if($_SESSION[actionMsg] != "") {
			echo $_SESSION[actionMsg];
			$_SESSION[actionMsg] = "";
		}
	?>
	<form action="includes/models/reg_action.php" id="signUpForm" name="signUpForm" enctype="multipart/form-data" method="post" onsubmit="javascript: return validateRegistrationForm();">
		<fieldset>
			<div class="labelContainer fLeft">
				<label for="suf_userNameTxt">Name </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="suf_userNameTxt" name="suf_userNameTxt" />
			</div>
			<div class="cLeft"></div>
			
			<div class="labelContainer fLeft">
				<label for="suf_userEmailTxt">Email </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="suf_userEmailTxt" name="suf_userEmailTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="suf_userPasswordTxt">Password </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="password" id="suf_userPasswordTxt" name="suf_userPasswordTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="suf_userConfPassTxt">Confirm Password </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="password" id="suf_userConfPassTxt" name="suf_userConfPassTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="suf_userAddressTa">Address </label>
			</div>
			<div class="elementContainer fLeft">
				<textarea id="suf_userAddressTa" name="suf_userAddressTa"></textarea>
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="suf_userContactTxt">Phone / Mobile </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="suf_userContactTxt" name="suf_userContactTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="suf_userCityTxt">City / State </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="suf_userCityTxt" name="suf_userCityTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="suf_userCountryTxt">Country </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="suf_userCountryTxt" name="suf_userCountryTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft"></div>
			<div class="elementContainer fLeft">
				<input type="submit" id="suf_submitBtn" name="suf_submitBtn" value="Sign Me Up" class="subBtnController" />
			</div>
			<div class="cLeft"></div>
		</fieldset>
	</form>
</div>
<div class="cLeft"></div>
