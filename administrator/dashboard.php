<?php 
	require_once("includes/_conf.php");
	if($_SESSION['loggedAdminId'] != "") {
?>

<?php require_once("includes/layouts/header.php"); ?>
<?php require_once("includes/layouts/navigation.php"); ?>
	<div id="bodySection">
		<?php
			if($page == "") require_once("includes/contents/dashboard.php");
			elseif($page == "product_add") require_once("includes/contents/product_add.php");
			elseif($page == "product_update") require_once("includes/contents/product_update.php");
			elseif($page == "subcat_add") require_once("includes/contents/subcat_add.php");
			elseif($page == "subcat_udpate") require_once("includes/contents/subcat_update.php");
			elseif($page == "category_add") require_once("includes/contents/category_add.php");
			elseif($page == "category_update") require_once("includes/contents/category_update.php");
			elseif($page == "order_report") require_once("includes/contents/order_report.php");
			elseif($page == "order_report_processing") require_once("includes/contents/order_report_processing.php");
			elseif($page == "order_report_pending") require_once("includes/contents/order_report_pending.php");
			elseif($page == "order_report_completed") require_once("includes/contents/order_report_completed.php");
			elseif($page == "order_report_cancelled") require_once("includes/contents/order_report_cancelled.php");
			elseif($page == "customer_update") require_once("includes/contents/customer_update.php");
			elseif($page == "admin_new") require_once("includes/contents/admin_new.php");
			elseif($page == "admin_update") require_once("includes/contents/admin_update.php");
			elseif($page == "admin_profile_update") require_once("includes/contents/admin_profile_update.php");
			elseif($page == "admin_update_password") require_once("includes/contents/admin_update_password.php");
			elseif($page == "product_stock") require_once("includes/contents/product_stock.php");
		?>
	</div>
<?php require_once("includes/layouts/footer.php"); ?>
<?php 
	}else {
		header("Location: http://localhost:9090/enalamode/administrator/administrator/");
	} 
?>