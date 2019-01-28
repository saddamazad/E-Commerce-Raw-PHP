<h2>Add New Admin</h2>

<?php
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
?>

<form action="includes/models/admin_new_action.php" id="addNewAdminForm" name="addNewAdminForm" enctype="multipart/form-data" method="post">
	<table class="formContainer">
		<tr>
			<td class="labelContainer"><label for="anaf_userName">Name </label></td>
			<td class="componentContainer"><input type="text" id="anaf_userName" name="anaf_userName" size="25" /></td>
		</tr>
		<tr>
			<td><label for="anaf_designation">Designation </label></td>
			<td><input type="text" id="anaf_designation" name="anaf_designation" size="25" /></td>
		</tr>
		<tr>
			<td><label for="anaf_adminType">Type </label></td>
			<td>
				<select id="anaf_adminType" name="anaf_adminType">
					<option value="-99">Select Admin</option>
					<option value="1">Super Admin</option>
					<option value="2">Admin</option>
					<option value="3">Operator</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for="anaf_loginEmail">Login Email </label></td>
			<td><input type="text" id="anaf_loginEmail" name="anaf_loginEmail" size="25" /></td>
		</tr>
		<tr>
			<td><label for="anaf_password">Password </label></td>
			<td><input type="password" id="anaf_password" name="anaf_password" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="buttonContainer">
				<input type="submit" id="anaf_submitBtn" name="anaf_submitBtn" value="Add Admin" />
			</td>
		</tr>
	</table>
</form>
