<?php
	require_once("includes/_app_utils.php");
?>
<h2>Add New Product</h2>
<?php
	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
?>
<form action="includes/models/product_add_action.php" id="addNewProductForm" name="addNewProductForm" enctype="multipart/form-data" method="post">
	<table class="formContainer">
		<tr>
			<td><label for="anpf_productImg">Product Sub-Category ID </label></td>
			<td>
				<select id="anpf_subCatgoryId" name="anpf_subCatgoryId">
					<option value="-99"> Select Sub-Category ID </option>
					<?php
						echo loadSubCategoriesAsOption();
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="labelContainer"><label for="anpf_productName">Product Name </label></td>
			<td class="componentContainer"><input type="text" id="anpf_productName" name="anpf_productName" /></td>
		</tr>
		<tr>
			<td><label for="anpf_productDetail">Product Detail </label></td>
			<td><textarea id="anpf_productDetail" name="anpf_productDetail" class="width200"></textarea></td>
		</tr>
		<tr>
			<td><label for="anpf_productImg">Product Image </label></td>
			<td><input type="file" id="anpf_productImg" name="anpf_productImg" /></td>
		</tr>
		<tr>
			<td><label for="anpf_productPrice">Price (in BDT)</label></td>
			<td><input type="text" id="anpf_productPrice" name="anpf_productPrice" value="" /></td>
		</tr>
		<tr>
			<td><label for="anpf_wholesellPrice">Wholesell Price (in BDT)</label></td>
			<td><input type="text" id="anpf_wholesellPrice" name="anpf_wholesellPrice" value="" /></td>
		</tr>
		<tr>
			<td><label for="anpf_discountRatio">Discount Ratio <br />(e.g. 5% as .05)</label></td>
			<td><input type="text" id="anpf_discountRatio" name="anpf_discountRatio" size="25" /></td>
		</tr>
		<tr>
			<td><label for="anpf_modelNo">Model No </label></td>
			<td><input type="text" id="anpf_modelNo" name="anpf_modelNo" size="25" /></td>
		</tr>
		<tr>
			<td><label for="anpf_cash_memo_no">Cash-Memo No </label></td>
			<td><input type="text" id="anpf_cash_memo_no" name="anpf_cash_memo_no" size="25" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="buttonContainer">
				<input type="submit" id="anpf_submitBtn" name="anpf_submitBtn" value="Add Product" />
			</td>
		</tr>
	</table>
</form>
