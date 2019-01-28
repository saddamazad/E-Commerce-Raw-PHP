<div id="siteMainContainer" class="fLeft">
	<h2>Update Your Password</h2>
	<?php
		if($_SESSION[actionMsg] != "") {
			echo $_SESSION[actionMsg];
			$_SESSION[actionMsg] = "";
		}
	?>
	<form action="includes/models/password_update_action.php" id="passwordUpdateForm" name="passwordUpdateForm" enctype="multipart/form-data" method="post" onsubmit="javascript: return validatePasswordUpdateForm();">
		<fieldset>
			<div class="labelContainer fLeft">
				<label for="puf_userPasswordTxt">Old Password </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="password" id="puf_userPasswordTxt" name="puf_userPasswordTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="puf_userNewPassTxt">New Password </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="password" id="puf_userNewPassTxt" name="puf_userNewPassTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="puf_userConfPassTxt">Confirm Password </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="password" id="puf_userConfPassTxt" name="puf_userConfPassTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft"></div>
			<div class="elementContainer fLeft">
				<input type="submit" id="puf_submitBtn" name="puf_submitBtn" value="Update" class="subBtnController" />
			</div>
			<div class="cLeft"></div>
		</fieldset>
	</form>
	
</div>
<div class="cLeft"></div>
