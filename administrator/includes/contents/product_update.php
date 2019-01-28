<?php
	require_once("includes/_app_utils.php");
?>
<h2>Update Product</h2>
<?php
	if($_GET[epid] != "" && $_GET[epid] >0) {
		// Check if the product exist
		$checkProduct = isProductExist($_GET[epid]);
		if($checkProduct > 0) {
			$productInfo = getProductInfoById($checkProduct);
			$subCatTitle = $productInfo->subcat_title;
			echo '<form action="includes/models/product_add_action.php" id="updateProductForm" name="updateProductForm" enctype="multipart/form-data" method="post">
					<table class="formContainer">
						<tr>
							<td><label for="upf_productImg">Product Sub-Category ID </label></td>
							<td>
								<select id="upf_subCatgoryId" name="upf_subCatgoryId">
									<option value="-99"> Select Sub-Category ID </option>
									<option selected="selected" value="'.$productInfo->pdt_subcat_id.'"> '.$subCatTitle.' </option>
										'. loadSubCategoriesAsDropdown($subCatTitle) .'
								</select>
							</td>
						</tr>
						<tr>
							<td class="labelContainer"><label for="upf_productName">Product Name </label></td>
							<td class="componentContainer"><input type="text" id="upf_productName" name="upf_productName" value="'.$productInfo->pdt_name.'" /></td>
						</tr>
						<tr>
							<td><label for="upf_productDetail">Product Detail </label></td>
							<td><textarea id="upf_productDetail" name="upf_productDetail" class="width200">'.$productInfo->pdt_detail.'</textarea></td>
						</tr>
						<tr>
							<td><label for="upf_imgCheckBox"><input type="checkbox" id="upf_imgCheckBox" name="upf_imgCheckBox" onchange="javascript: validateFileUploadBtn(\'upf_productImg\', \'upf_imgCheckBox\');" /> Product Image </label></td>
							<td><input type="file" id="upf_productImg" name="upf_productImg" disabled="disabled" /></td>
						</tr>
						<tr>
							<td><label for="upf_productPrice">Price (in BDT)</label></td>
							<td><input type="text" id="upf_productPrice" name="upf_productPrice" value="'.$productInfo->pdt_price.'" /></td>
						</tr>
						<tr>
							<td><label for="upf_wholesellPrice">Wholesell Price (in BDT)</label></td>
							<td><input type="text" id="upf_wholesellPrice" name="upf_wholesellPrice" value="'.$productInfo->pdt_wholesell_price.'" /></td>
						</tr>
						<tr>
							<td><label for="upf_discountRatio">Discount Ratio <br />(e.g. 5% as .05)</label></td>
							<td><input type="text" id="upf_discountRatio" name="upf_discountRatio" size="25" value="'.$productInfo->pdt_discount_ratio.'" /></td>
						</tr>
						<tr>
							<td><label for="upf_modelNo">Model No </label></td>
							<td><input type="text" id="upf_modelNo" name="upf_modelNo" size="25" value="'.$productInfo->pdt_model_no.'" /></td>
						</tr>
						<tr>
							<td><label for="upf_cash_memo_no">Cash-Memo No </label></td>
							<td><input type="text" id="upf_cash_memo_no" name="upf_cash_memo_no" size="25" value="'.$productInfo->pdt_cash_memo_no.'" /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td class="buttonContainer">
								<input type="hidden" id="upf_productId" name="upf_productId" value="'.$productInfo->pdt_id.'" />
								<input type="submit" id="upf_submitBtn" name="upf_submitBtn" value="Update Product" />
							</td>
						</tr>
					</table>
				</form>';
				$trigger = 1;
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Record Not Found.</div>';
		}
	}elseif($_GET[dpid] != "" && $_GET[dpid] >0) {
		// Check if the product exist
		$checkProduct = isProductExist($_GET[dpid]);
		if($checkProduct > 0) {
			deleteProductById($checkProduct);
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

<table align="center" class="recordController" cellpadding="5" cellspacing="0" border="1">
<?php
	if($trigger != 1) {
		echo '<tr>
				<th width="30px">Seq</th>
				<th width="50px">S.C ID</th>
				<th width="120px">Product Name</th>
				<th width="160px">Product Detail</th>
				<th width="120px">Product Image</th>
				<th width="20px">Product Price</th>
				<th width="20px">Discount</th>
				<th width="100px">Action</th>
			</tr>';
		echo getProductsAsTableRow();
	}
?>
</table>