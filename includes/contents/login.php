<div id="siteMainContainer" class="fLeft">
	<?php
		if($_SESSION[actionMsg] != "") {
			echo $_SESSION[actionMsg];
			$_SESSION[actionMsg] = "";
		}
	?>
	<form action="includes/models/login_action.php" id="loginForm" name="loginForm" enctype="multipart/form-data" method="post">
		<fieldset>
			<div class="labelContainer fLeft">
				<label for="lf_userEmailTxt">Email </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="lf_userEmailTxt" name="lf_userEmailTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="lf_userPasswordTxt">Password </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="password" id="lf_userPasswordTxt" name="lf_userPasswordTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft"></div>
			<div class="elementContainer fLeft">
				<input type="submit" id="lf_submitBtn" name="lf_submitBtn" value="Login" class="subBtnController" />
			</div>
			<div class="cLeft"></div>
		</fieldset>
	</form>
</div>
<div class="cLeft"></div>
