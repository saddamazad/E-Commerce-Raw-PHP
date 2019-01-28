<?php
	require_once("includes/_app_utils.php");
?>
<h2>Add New Product Sub-Category</h2>
<?php
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
?>
<form id="subCategoryAddForm" name="subCategoryAddForm" action="includes/models/sub_category_action.php" method="post" enctype="multipart/form-data">
	<table class="formContainer">
		<tr>
			<td><label for="scaf_categoryListSel">Select Category</label></td>
			<td>
				<select id="scaf_categoryListSel" name="scaf_categoryListSel">
					<option value="-99">Select A Category</option>
					<?php
						echo getCategoriesAsDropdown();
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="labelContainer"><label for="scaf_sscategoryTitleTxt">Sub-Category Title</label></td>
			<td class="componentContainer"><input type="text" id="scaf_scategoryTitleTxt" name="scaf_scategoryTitleTxt" /></td>
		</tr>
		<tr>
			<td><label for="scaf_scategoryDescTa">Sub-Category Description</label></td>
			<td>
				<textarea id="scaf_scategoryDescTa" name="scaf_scategoryDescTa"></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="buttonContainer">
				<input type="submit" id="scaf_scategoryAddActionBtn" name="scaf_scategoryAddActionBtn" value="Add Sub-Category" />
			</td>
		</tr>
	</table>
</form>