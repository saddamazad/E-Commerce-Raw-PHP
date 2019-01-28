<?php
	require_once("../libs/sub_category_action_class.php");
	
	if($_POST[scaf_scategoryAddActionBtn] == "Add Sub-Category") {
		// Read the form
		$subcatCategoryId = $_POST[scaf_categoryListSel];
		$subcatTitle = $_POST[scaf_scategoryTitleTxt];
		$subcatDesc = $_POST[scaf_scategoryDescTa];
		
		$newSubcatId = getNewSubcatId("tbl_sub_categories", "subcat_id");
		
		$insertValues = "VALUES($newSubcatId,
								$subcatCategoryId,
								'$subcatTitle',
								'$subcatDesc',
								now(),
								now(),1 )";
		$insertAction = insertSubCategory($insertValues, "sub_category_action_class -12");
		if($insertAction) {
			$_SESSION[actionMsg] = '<div class="successMsg">Wow! Insert Operation Done Successfully.</div>';
		} else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Insert Operation Failed.</div>';
		}

		header("Location: ".siteUrl."dashboard.php?page=subcat_add");
	} elseif($_POST[scuf_scategoryAddActionBtn] == "Update Sub-Category") {
		// Read the form
		$subcatCategoryId = $_POST[scuf_categoryListSel];
		$subcatTitle = $_POST[scuf_scategoryTitleTxt];
		$subcatDesc = $_POST[scuf_scategoryDescTa];
		$subcatId = $_POST[scuf_subcatId];

		$updateValues = "SET subcat_category_id=$subcatCategoryId,
							 subcat_title='$subcatTitle',
							 subcat_description='$subcatDesc',
							 subcat_udate=now() ";

		$updateSubCategory = updateSubCategoryById($updateValues, $subcatId, "sub_category_action -33: ");
		if($updateSubCategory) {
			$_SESSION[actionMsg] = '<div class="successMsg">Wow! Update Operation Done Successfully</div>';
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Update Operation Failed.</div>';
		}

		header("Location: ".siteUrl."dashboard.php?page=subcat_udpate");
	} else {
		echo '<h2>This area is only for authorized users.</h2>';
	}
?>