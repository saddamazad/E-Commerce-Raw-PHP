<?php
	session_start();

	if(strpos($_SERVER['PHP_SELF'],"index.php") > 0) $activePage = "index";
	elseif(strpos($_SERVER['PHP_SELF'],"contact_us.php") > 0) $activePage = "contact_us";
	elseif(strpos($_SERVER['PHP_SELF'],"showroom.php") > 0) $activePage = "showroom";
	elseif(strpos($_SERVER['PHP_SELF'],"my_cart.php") > 0) $activePage = "my_cart";

	if($_SESSION[userId] != "") $logText = '<a href="logout.php">Your Account<br />(<span>Logout</span>)</a>';
	else $logText = '<a href="login.php">Your Account<br />(<span>Log in</span>)</a>';
	
	if($_SESSION[userId] != "") $signOrProfileTxt = '<a class="last" href="customer_profile_update.php"><span>Your Profile</span></a> <a href="customer_password_update.php" class="last"><h6>Change Pass.</h6></a>';
	else $signOrProfileTxt = '<a class="last" href="registration.php"><span>Sign Up !</span></a>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Enalamode Shopping Cart</title>
		<link rel="stylesheet" href="resources/smoothgallery/css/jd.gallery.css" type="text/css" />
		<link type="text/css" rel="stylesheet" href="css/styles.css" />
		<link type="text/css" rel="stylesheet" href="resources/dropdown_menu/ddsmoothmenu-v.css" />
		<script type="text/javascript" language="javascript" src="resources/js_utils.js"></script>
		<script type="text/javascript" language="javascript" src="resources/validators.js"></script>
		<script type="text/javascript" src="resources/dropdown_menu/jquery.min.js"></script>
		<script type="text/javascript" src="resources/dropdown_menu/ddsmoothmenu.js"></script>
		<script type="text/javascript">
			ddsmoothmenu.init({
			mainmenuid: "siteCategories", //Menu DIV id		  ++++++++++ #### +++++++++++++
			orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
			//customtheme: ["#804000", "#482400"],
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
			})
		</script>
		<script type="text/javascript" src="resources/smoothgallery/scripts/mootools-1.2.1-core-yc.js"></script>
		<script type="text/javascript" src="resources/smoothgallery/scripts/mootools-1.2-more.js"></script>
		<script type="text/javascript" src="resources/smoothgallery/scripts/jd.gallery.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
			<a href="index.php"><div id="siteLogo" class="fLeft"></div></a>
			<div id="topMenu" class="fRight">
				<ul>
					<li><?php echo $logText; ?></li>
					<li><?php echo $signOrProfileTxt; ?></li>
				</ul>
				<div class="cLeft"></div>
			</div>
			<div class="cBoth"></div>
