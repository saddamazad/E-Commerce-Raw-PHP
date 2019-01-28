<div id="siteMainContainer" class="fLeft">
	<?php
		if($_SESSION[actionMsg] != "") {
			echo $_SESSION[actionMsg];
			$_SESSION[actionMsg] = "";
		}
	?>
	<form action="includes/models/contact_action.php" id="contactForm" name="contactForm" enctype="multipart/form-data" method="post" onsubmit="javascript: return validateContactUsForm();">
		<fieldset>
			<div class="labelContainer fLeft">
				<label for="cf_visitorNameTxt">Name </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cf_visitorNameTxt" name="cf_visitorNameTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="cf_visitorEmailTxt">Email </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cf_visitorEmailTxt" name="cf_visitorEmailTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="cf_visitorSubjTxt">Subject </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cf_visitorSubjTxt" name="cf_visitorSubjTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="cf_visitorMsgTa">Message </label>
			</div>
			<div class="elementContainer fLeft">
				<textarea id="cf_visitorMsgTa" name="cf_visitorMsgTa"></textarea>
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft"></div>
			<div class="elementContainer fLeft">
				<input type="submit" id="cf_submitBtn" name="cf_submitBtn" value="Send" class="subBtnController" />
			</div>
			<div class="cLeft"></div>
		</fieldset>
	</form>
</div>
<div class="cLeft"></div>
