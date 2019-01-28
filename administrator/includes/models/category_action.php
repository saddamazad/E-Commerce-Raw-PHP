<?php
	require_once("../libs/category_action_class.php");

	if($_POST[caf_categoryAddActionBtn] == "Add Category") {
		// Read the form
		$categoryTitle = $_POST[caf_categoryTitleTxt];
		$categoryDesc = $_POST[caf_categoryDescTa];
		
		$newCatId = getNewPrimaryKeyId("tbl_categories", "cat_id");
		
		$values = "VALUES($newCatId, '$categoryTitle', '$categoryDesc', now(), now(), 1 )";
		$insertValues = addCategoryToDB($values, "category_action -11");
		if($insertValues) {
			$_SESSION[actionMsg] = '<div class="successMsg">Wow! Insert Operation Done Successfully</div>';
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Insert Operation Failed.</div>';
		}
		
		header("Location: ".siteUrl."dashboard.php?page=category_add");
		
	} elseif($_POST[cuf_categoryUpdateActionBtn] == "Update Category") {
		// Read the form
		$categoryTitle = $_POST[cuf_categoryTitleTxt];
		$categoryDesc = $_POST[cuf_categoryDescTa];
		$categoryId = $_POST[cuf_categoryId];
		
		$updateValues = "SET cat_title='$categoryTitle',
							 cat_description='$categoryDesc',
							 cat_udate=now() ";
		$updateCategory = updateCategoryById($updateValues, $categoryId, "category_action -26: ");
		if($updateCategory) {
			$_SESSION[actionMsg] = '<div class="successMsg">Wow! Update Operation Done Successfully</div>';
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Update Operation Failed.</div>';
		}
		
		header("Location: ".siteUrl."dashboard.php?page=category_update");
		
	} else {
		echo 'This area is only for authorized users.';
	}
?>