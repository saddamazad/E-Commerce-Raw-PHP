<?php
	require_once("includes/_app_utls.php");
	
	if($_POST['fpf_submitBtn'] == "Submit") {
		// Read Form data
		$loginEmail = $_POST[fpf_loginEmail];
		
		$checkEmail = isEmailExist($loginEmail);
		if($checkEmail == 1) {
			$token = md5(uniqid(rand()));
			$to = $loginEmail;
			$header = "From: Your Shopping Cart Administrator";
			$subject = 'Confirm Your Token No';
			$message .= 'Hello Sir, Here is your token no. Please click on the link below to confirm the token no and choose a new password.';
			$message .= 'Click on this link - '.siteUrl."forgetpass.php?token='$token'";
			$sentMail = mail($to, $subject, $message, $header);
			if($sentMail)
				$_SESSION[actionMsg] = '<div class="successMsg">Token no has been sent to your email.</div>';
			else 
				$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Mail Operation Failed.</div>';
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Record Not Found.</div>';
		}
		header("Location: ".siteUrl);
	}elseif($_GET[token] != "") {
		echo '<div class="wrapper">
				<form id="newPassForm" name="newPassForm" action="includes/models/forgetpass_action.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return validateNewPassForm();">
				<table width="80%" align="center">
					<tr>
						<td width="40%" style="text-align:right;"><label for="npf_newPassword">Enter Your New Password </label></td>
						<td width="60%"><input type="password" id="npf_newPassword" name="npf_newPassword" /></td>
					</tr>
					<tr>
						<td width="40%" style="text-align:right;"><label for="npf_confPassword">Confirm Password </label></td>
						<td width="60%"><input type="password" id="npf_confPassword" name="npf_confPassword" /></td>
					</tr>
					<tr>
						<td>&nbsp; </td>
						<td>
							<input type="hidden" id="npf_hiddenEmail" name="npf_hiddenEmail" value="'.$loginEmail.'" />
							<input type="submit" id="npf_submitBtn" name="npf_submitBtn" value="Submit" />
						</td>
					</tr>
				</table>
			</form>
		</div>';
		$trigger = 1;
	}
				
	if($trigger != 1){
		echo '<div class="wrapper">
				<form id="forgotPassForm" name="forgotPassForm" action="" method="post" enctype="multipart/form-data">
				<table width="80%" align="center">
					<tr>
						<td colspan="2">
							<h2>Forgot Your Password ?</h2>
							<br />
							<p>
								Please enter the email address for your account. A varification token 
								will be sent to you. Once you have received the token, you will be 
								able to choose a new password for your account.
							</p>
							<br />
						</td>
					</tr>
					<tr>
						<td width="30%" style="text-align:right;"><label for="fpf_loginEmail">Your Email: </label></td>
						<td width="70%"><input type="text" id="fpf_loginEmail" name="fpf_loginEmail" /></td>
					</tr>
					<tr>
						<td>&nbsp; </td>
						<td><input type="submit" id="fpf_submitBtn" name="fpf_submitBtn" value="Submit" /></td>
					</tr>
				</table>
			</form>
		</div>';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Forgot Password</title>
		<script type="text/javascript" language="javascript" src="js/js_utils.js"></script>
		<script type="text/javascript" language="javascript" src="js/validators.js"></script>
		<style type="text/css">
			body {
				margin: 0;
				background: #999999;
			}
			h2 { color:#FF0000; text-decoration:underline; }
			.wrapper {
				width: 700px;
				margin: 100px auto 0 auto;
				border: 4px solid #CCCCCC;
				background: #333333;
				padding: 35px 10px 50px 10px;
			}
			.wrapper input[type=text], input[type=password] {
				width: 250px;
			}
			.wrapper p { color:#FFFFFF; font-weight: bold; }
			.wrapper label { color:#FFFFFF; }
		</style>
	</head>
	
	<body>
	</body>
</html>
