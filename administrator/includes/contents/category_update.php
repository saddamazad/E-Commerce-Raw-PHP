<h2>Update Categories</h2>
<?php
	require_once("includes/_app_utils.php");
	
	if($_GET[ceid] != "" && $_GET[ceid] > 0) {
		// Check the category
		$checkCategory = isCategoryExist($_GET[ceid]);
		if($checkCategory > 0) {
			$categoryInfo = getCategoryInfoById($checkCategory);
			echo '<form id="categoryUpdateForm" name="categoryUpdateForm" action="includes/models/category_action.php" method="post" enctype="multipart/form-data">
					<table class="formContainer">
						<tr>
							<td class="labelContainer"><label for="cuf_categoryTitleTxt">Category Title</label></td>
							<td class="componentContainer"><input type="text" id="cuf_categoryTitleTxt" name="cuf_categoryTitleTxt" value="'.$categoryInfo->cat_title.'" /></td>
						</tr>
						<tr>
							<td><label for="cuf_categoryDescTa">Category Description</label></td>
							<td>
								<textarea id="cuf_categoryDescTa" name="cuf_categoryDescTa">'.$categoryInfo->cat_description.'</textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td class="buttonContainer">
								<input type="hidden" id="cuf_categoryId" name="cuf_categoryId" value="'.$categoryInfo->cat_id.'" />
								<input type="submit" id="cuf_categoryUpdateActionBtn" name="cuf_categoryUpdateActionBtn" value="Update Category" />
							</td>
						</tr>
					</table>
				</form>';
				$trigger = 1;
		}
	} elseif($_GET[cdid] != "" && $_GET[cdid] >0) {
		// Check the category
		$checkCategory = isCategoryExist($_GET[cdid]);
		if($checkCategory > 0) {
			deleteRecordById($checkCategory);
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Record Not Found.</div>';
		}
	}
?>

<?php
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
?>
<table align="center" cellpadding="5" cellspacing="0" border="1" class="recordViewer">
	<?php
		if($trigger != 1) {
			echo '<tr>
					<th width="35px">Seq</th>
					<th width="200px">Category Title</th>
					<th width="200px">Category Description</th>
					<th width="150px">Action</th>
				</tr>';
			echo showCategoriesAsTableRow();
		}
	?>
</table>
