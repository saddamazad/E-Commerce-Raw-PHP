<?php require_once("includes/_app_utils.php"); ?>

<h2><u>Update Your Profile</u></h2>

<?php
	if($_GET['ean'] != "" && $_GET['ean'] > 0) {
		// $recordObj = getLoggedAdminName($_SESSION['loggedAdminId']);
		echo '<form action="includes/models/admin_profile_update_action.php" id="updateAdminNameForm" name="updateAdminNameForm" method="post">
				<table class="formContainer">
					<tr>
						<td><label for="uanf_adminNameTxt">Update Your Name</label></td>
						<td>
							<input type="text" id="uanf_adminNameTxt" name="uanf_adminNameTxt" value="'.$_SESSION['loggedAdminName'].'" />
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="buttonContainer">
							<input type="hidden" id="uanf_adminId" name="uanf_adminId" value="'.$_SESSION['loggedAdminId'].'" />
							<input type="submit" id="uanf_submitBtn" name="uanf_submitBtn" value="Update" />
						</td>
					</tr>
				</table>
			</form>';
			$trigger = 1;
				
	} elseif($_GET['eae'] != "" && $_GET['eae'] > 0) {
		echo '<form action="includes/models/admin_profile_update_action.php" id="updateAdminEmailForm" name="updateAdminEmailForm" method="post">
				<table class="formContainer">
					<tr>
						<td><label for="adminEmailTxt">Update Your Email</label></td>
						<td>
							<input type="text" id="adminEmailTxt" name="adminEmailTxt" value="'.$_SESSION['loggedAdminEmail'].'" />
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="buttonContainer">
							<input type="hidden" id="uaef_adminId" name="uaef_adminId" value="'.$_SESSION['loggedAdminId'].'" />
							<input type="submit" id="uaef_submitBtn" name="uaef_submitBtn" value="Update" />
						</td>
					</tr>
				</table>
			</form>';
			$trigger = 1;
	} elseif($_GET['ead'] != "" && $_GET['ead'] > 0) {
		echo '<form action="includes/models/admin_profile_update_action.php" id="updateAdminDsgnForm" name="updateAdminDsgnForm" method="post">
				<table class="formContainer">
					<tr>
						<td><label for="adminDesignationTxt">Update Your Designation</label></td>
						<td>
							<input type="text" id="adminDesignationTxt" name="adminDesignationTxt" value="'.$_SESSION['loggedAdminDesignation'].'" />
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="buttonContainer">
							<input type="hidden" id="uadf_adminId" name="uadf_adminId" value="'.$_SESSION['loggedAdminId'].'" />
							<input type="submit" id="uadf_submitBtn" name="uadf_submitBtn" value="Update" />
						</td>
					</tr>
				</table>
			</form>';
			$trigger = 1;
	}
	
	
	
	if($_SESSION['actionMsg'] != "") {
		echo $_SESSION['actionMsg'];
		$_SESSION['actionMsg'] = "";
	}
?>


<!-- Listing Profile Information -->
<?php
	if($trigger != 1) {
		echo '<table style="padding:10px 0;" class="recordViewer">
				<tr>
					<td style="font-weight:bold;"><a href="dashboard.php?page=admin_profile_update&ean='.$_SESSION['loggedAdminId'].'">Change Your Name</a></td>
				</tr>
				<tr>
					<td style="font-weight:bold;"><a href="dashboard.php?page=admin_profile_update&eae='.$_SESSION['loggedAdminId'].'">Change Your Email</a></td>
				</tr>
				<tr>
					<td style="font-weight:bold;"><a href="dashboard.php?page=admin_profile_update&ead='.$_SESSION['loggedAdminId'].'">Change Your Designation</a></td>
				</tr>
			</table>';
	}
?>