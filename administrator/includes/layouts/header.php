<?php 
	$page = $_GET['page'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Welcome to Admin Login Area [Restricted Area]</title>
		<script type="text/javascript" language="javascript" src="js/js_utils.js"></script>
		<script type="text/javascript" language="javascript" src="js/validators.js"></script>
		<link type="text/css" rel="stylesheet" href="css/styles.css" />
	</head>
	
	<body>
		<div class="wrapper">
			<div id="headerSection">
				<div class="fLeft">
					<h1>Shooping Cart <br /><small>[Admin Area]</small></h1>
				</div>
				<div class="fRight">
					<span>Welcome <a href="dashboard.php?page=admin_profile_update"><?php echo $_SESSION['loggedAdminName']; ?></a> | <a href="logout.php">Logout</a></span>
				</div>
				<div class="cBoth"></div>
			</div>
