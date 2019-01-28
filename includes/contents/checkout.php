<div id="siteMainContainer" class="fLeft">
	<?php
		if($_SESSION[userId] == "") {
			echo '<h2>This area is only for authorized users.</h2>';
		} else {
	?>
	<h2>Fill-up the form below: </h2>
	<?php
		if($_SESSION[actionMsg] != "") {
			echo $_SESSION[actionMsg];
			$_SESSION[actionMsg] = "";
		}
	?>
	<form action="includes/models/checkout_action.php" id="checkOutForm" name="checkOutForm" enctype="multipart/form-data" method="post">
		<fieldset>
			<div class="labelContainer fLeft">
				<label for="cof_deliveryAddressTa">Delivery Address </label>
			</div>
			<div class="elementContainer fLeft">
				<textarea id="cof_deliveryAddressTa" name="cof_deliveryAddressTa"></textarea>
			</div>
			<div class="cLeft"></div>
			
			<div class="labelContainer fLeft">
				<label for="cof_userEmailTxt">Email </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cof_userEmailTxt" name="cof_userEmailTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft">
				<label for="cof_userContactTxt">Phone No. </label>
			</div>
			<div class="elementContainer fLeft">
				<input type="text" id="cof_userContactTxt" name="cof_userContactTxt" />
			</div>
			<div class="cLeft"></div>

			<div class="labelContainer fLeft"></div>
			<div class="elementContainer fLeft">
				<input type="submit" id="cof_submitBtn" name="cof_submitBtn" value="Checkout" class="subBtnController" />
			</div>
			<div class="cLeft"></div>
		</fieldset>
	</form>
	<?php } ?>
</div>
<div class="cLeft"></div>
