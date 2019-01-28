<?php
	require_once("includes/_app_utils.php");
	
	if($_GET['aupid'] != "" && $_GET['aupid'] > 0) {
		$loggedAdminId = $_SESSION['loggedAdminId'];
		// $recordObj = getLoggedAdminPassword($loggedAdminId);
		if($loggedAdminId > 0) {
			echo '<h2 style="text-align:center; margin-bottom:30px;"><u>Update Your Password</u></h2>';
			echo '<form action="includes/models/admin_update_password_action.php" id="updateAdminPassForm" name="updateAdminPassForm" method="post" onsubmit="javascript:return validateUpdateAdminPassForm();">
					<table class="formContainer">
						<tr>
							<td><label for="uapf_adminOldPassword">Old Password</label></td>
							<td>
								<input type="password" id="uapf_adminOldPassword" name="uapf_adminOldPassword" />
							</td>
						</tr>
						<tr>
							<td><label for="uapf_adminNewPassword">New Password</label></td>
							<td>
								<input type="password" id="uapf_adminNewPassword" name="uapf_adminNewPassword" />
							</td>
						</tr>
						<tr>
							<td><label for="uapf_adminConfPassword">Confirm New Password</label></td>
							<td>
								<input type="password" id="uapf_adminConfPassword" name="uapf_adminConfPassword" />
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td class="buttonContainer">
								<input type="hidden" id="uapf_adminId" name="uapf_adminId" value="'.$_SESSION['loggedAdminId'].'" />
								<input type="submit" id="uapf_submitBtn" name="uapf_submitBtn" value="Update" />
							</td>
						</tr>
					</table>
				</form>';
				$trigger = 1;
		}else {
			echo 'Sorry, Object Not Found.';
		}
	} else {
	}
		
	
	if($trigger != 1) {
	echo '<h2><a class="passwordLinkColor" href="dashboard.php?page=admin_update_password&aupid='.$_SESSION['loggedAdminId'].'">Update Your Password</a></h2>';
	}
	
	
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}

?>
