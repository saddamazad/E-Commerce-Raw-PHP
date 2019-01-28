<?php
	require_once("includes/_app_utils.php");
?>
<h2>Update Sub-category</h2>
<?php
	if($_GET[escid] != "" && $_GET[escid] > 0) {
		// Check if the sub category exist
		$checkSubCategory = isSubCategoryExist($_GET[escid]);
		if($checkSubCategory > 0) {
			$subCatInfo = getSubcategoryInfoById($checkSubCategory);
			$catTitle = $subCatInfo->cat_title;
			echo '<form id="subCategoryUpdateForm" name="subCategoryUpdateForm" action="includes/models/sub_category_action.php" method="post" enctype="multipart/form-data">
					<table class="formContainer">
						<tr>
							<td><label for="scuf_categoryListSel">Select Category</label></td>
							<td>
								<select id="scuf_categoryListSel" name="scuf_categoryListSel">
									<option value="-99">Select A Category</option>
									<option selected="selected" value="'.$subCatInfo->subcat_category_id.'">'.$subCatInfo->cat_title.'</option>
									'. getCategoriesAsDropdown($catTitle) .'
								</select>
							</td>
						</tr>
						<tr>
							<td class="labelContainer"><label for="scuf_sscategoryTitleTxt">Sub-Category Title</label></td>
							<td class="componentContainer"><input type="text" id="scuf_scategoryTitleTxt" name="scuf_scategoryTitleTxt" value="'.$subCatInfo->subcat_title.'" /></td>
						</tr>
						<tr>
							<td><label for="scuf_scategoryDescTa">Sub-Category Description</label></td>
							<td>
								<textarea id="scuf_scategoryDescTa" name="scuf_scategoryDescTa">'.$subCatInfo->subcat_description.'</textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td class="buttonContainer">
								<input type="hidden" id="scuf_subcatId" name="scuf_subcatId" value="'.$subCatInfo->subcat_id.'" />
								<input type="submit" id="scuf_scategoryAddActionBtn" name="scuf_scategoryAddActionBtn" value="Update Sub-Category" />
							</td>
						</tr>
					</table>
				</form>';
				$trigger = 1;
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Sub-category not found.</div>';
		}
	}elseif($_GET[dscid] != "" && $_GET[dscid] > 0) {
		// Check if the sub category exist
		$checkSubCategory = isSubCategoryExist($_GET[dscid]);
		if($checkSubCategory > 0) {
			deleteSubCategoryById($checkSubCategory);
		} else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Record not found.</div>';
		}
	}
?>

<?php
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
?>

<table align="center" class="recordViewer" cellpadding="5" cellspacing="0" border="1">
<?php
	if($trigger != 1) {
		echo '<tr>
				<th width="40px">Seq</th>
				<th width="90px">S.cat Cat ID</th>
				<th width="150px">Subcat Title</th>
				<th width="200px">Subcat Description</th>
				<th width="120px">Action</th>
			</tr>';
		echo showSubCategoriesAsTableRow();
	}
?>
</table>
