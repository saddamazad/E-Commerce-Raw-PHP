<?php
	require_once("includes/models/login_action.php");
	
	if($_POST[lf_loginActionBtn] == "Login") {
		// Read Form Values
		$loginEmail = $_POST[lf_loginEmail];
		$loginPass = md5($_POST[lf_loginPass]);
		
		doLogin($loginEmail, $loginPass);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Welcome to Admin Login Area [Restricted Area]</title>
		<style type="text/css">
			body {
				margin: 0;
				background: #999999;
			}
			.wrapper {
				width: 700px;
				margin: 100px auto 0 auto;
				border: 4px solid #CCCCCC;
				background: #333333;
				color: #fff;
				font-weight: bold;
				padding: 20px 10px;
			}
			.wrapper input {
				width: 250px;
			}
			.wrapper .subBtnCntl {
				width:60px;
			}
			.wrapper a {
				color:#FFCC66;
				text-decoration: none;
			}
			.wrapper a:hover {
				text-decoration: underline;
				color: #fff; 
			}
			.successMsg, .errorMsg {
				width: 80%;
				margin: 0 auto;
				border: 2px solid #fff;
				color: #006600;
				padding: 5px 10px;
				text-align: center;
				background: #CCCCCC;
				font-size: 1.5em;
			}
			.errorMsg {
				border: 2px solid #990000;
				color: #990033;
			}
		</style>
	</head>
	
	<body>
		<div class="wrapper">
			<form id="loginForm" name="loginForm" action="" method="post" enctype="multipart/form-data">
				<table width="80%" align="center">
					<tr>
						<td colspan="2">
							<h1 align="center">Welcome to Secure Login Area</h1>
							<h4><?php 
								if($_SESSION['actionMsg'] != "") {
									echo $_SESSION['actionMsg'];
									$_SESSION['actionMsg'] = "";
								}
							?></h4>
						</td>
					</tr>
					<tr>
						<td width="30%" style="text-align:right;">Login Email: </td>
						<td width="70%"><input type="text" id="lf_loginEmail" name="lf_loginEmail" /></td>
					</tr>
					<tr>
						<td style="text-align:right;">Password: </td>
						<td><input type="password" id="lf_loginPass" name="lf_loginPass" /></td>
					</tr>
					<tr>
						<td>&nbsp; </td>
						<td><input type="submit" id="lf_loginActionBtn" name="lf_loginActionBtn" value="Login" class="subBtnCntl" /></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
