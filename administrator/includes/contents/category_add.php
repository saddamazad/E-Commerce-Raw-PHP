<h2>Add New Product Category</h2>
<?php
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
?>
<form id="categoryAddForm" name="categoryAddForm" action="includes/models/category_action.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return validateCategoryAddForm();">
	<table class="formContainer">
		<tr>
			<td class="labelContainer"><label for="caf_categoryTitleTxt">Category Title</label></td>
			<td class="componentContainer"><input type="text" id="caf_categoryTitleTxt" name="caf_categoryTitleTxt" /></td>
		</tr>
		<tr>
			<td><label for="caf_categoryDescTa">Category Description</label></td>
			<td>
				<textarea id="caf_categoryDescTa" name="caf_categoryDescTa"></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="buttonContainer">
				<input type="submit" id="caf_categoryAddActionBtn" name="caf_categoryAddActionBtn" value="Add Category" />
			</td>
		</tr>
	</table>
</form>