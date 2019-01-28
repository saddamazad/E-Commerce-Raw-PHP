<?php
	require_once("../_conf.php");
	
	if($_POST[cf_submitBtn] = "Send") {
		// Read the form
		$visitorName = $_POST[cf_visitorNameTxt];
		$visitorEmail = $_POST[cf_visitorEmailTxt];
		$visitorMsgSubject = $_POST[cf_visitorSubjTxt];
		$visitorMsg = $_POST[cf_visitorMsgTa];
		
		$to = "saddam987020@gmail.com";
		$subject = "MSC: ".$visitorMsgSubject;

		$message = "<html>
		<head>
		<title>Message from Mr/Ms $visitorName</title>
		</head>
		<body>
		<p>A visitor with following detail has sent the message:</p>
		<p>$visitorMsg</p>
		
		Visotor Detail:
		<table>
		  <tr>
			<td>Name:</td>
			<td>$visitorName</td>
		  </tr>
		  <tr>
			<td>Email:</td>
			<td>$visitorEmail</td>
		  </tr>
		</table>
		</body>
		</html>";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
		// More headers
		$headers .= 'From: '.$visitorName.' <'.$visitorEmail.'>' . "\r\n";

		if(mail($to,$subject,$message,$headers)) {
			$_SESSION[actionMsg] = '<div class="successMsg">Thank you for contacting with us. We will soon contact you back or reply of your message.</div>';
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, email can not be sent.</div>';
		}
		header("Location: ".SITE_URL."contact_us.php");
	} else {
		echo '<h2>You do not have the authority to access this file.</h2>';
	}
?>