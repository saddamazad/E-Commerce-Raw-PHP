<?php
	require_once("_utils.php");
	
	function getProductsBySubcatTitle($subCategoryTitle) {
		$sql = "SELECT *,tbl_sub_categories.subcat_id FROM tbl_products,tbl_sub_categories 
				WHERE tbl_products.pdt_subcat_id=tbl_sub_categories.subcat_id 
				AND tbl_sub_categories.subcat_title='$subCategoryTitle'";
		$records = getAllRecords($sql, "_app_utils -5 ");
		echo strtoupper('<h3>'.$subCategoryTitle.' :</h3>');
		echo '<table align="center" width="400px" cellspacing="25">';
		$noOfRecords = count($records);
		$recordCounter = 1;
		$noOfDesiredColumn = 3;
		foreach($records as $rc) {
			if($recordCounter == 1) echo '<tr>';

			echo '<td><a href="index.php?pdt='.$rc->pdt_id.'"><img src="'.SITE_URL.'images/products/'.$rc->pdt_image.'" alt="'.$rc->pdt_name.'" /><br />'.$rc->pdt_name.'</a></td>';
			$recordCounter++;
			$noOfRecords--;

			// Print the extraa TD(s)
			if($noOfRecords == 0) {
				if(($recordCounter-1) != $noOfDesiredColumn)
					for($i=0; $i<=($noOfDesiredColumn-$recordCounter); $i++) echo '<td>&nbsp;</td>';
					$recordCounter += $i;
			}
			#--/\--#
			
			if($recordCounter > $noOfDesiredColumn) {
				echo '</tr>';
				$recordCounter = 1;
			}
		}
		echo '</table>';
	}
	
	function showProductsById($productId) {
		$sql = "SELECT * FROM tbl_products WHERE pdt_id=$productId";
		$result = getSingleRecord($sql, "_app_utils -37 ");
		echo '<img src="'.SITE_URL.'images/products/'.$result->pdt_image.'" alt="'.$result->pdt_name.'" /><br /><h5>Price [ BDT ] : '.$result->pdt_price.' /-</h5>
			<form action="includes/models/product_action.php" id="addToCartForm" name="addToCartForm" enctype="multipart/form-data" method="post">
		<table>
			<tr>
				<td><label for="atcf_pdtQuantityTxt">Quantity </label></td>
				<td><input type="text" id="atcf_pdtQuantityTxt" name="atcf_pdtQuantityTxt" /></td>
				<td>
					<input type="hidden" id="atcf_productId" name="atcf_productId" value="'.$result->pdt_id.'" />
					<input type="submit" id="atcf_addToCartBtn" name="atcf_addToCartBtn" value="Add To Cart" />
				</td>
			</tr>
		</table>
	</form>';
	}
	
	function getProductInfoById($productId) {
		$sql = "SELECT * FROM tbl_products WHERE pdt_id='$productId'";
		$result = getSingleRecord($sql, "_app_utils -56 ");
		return $result;
	}
	
	function getAllShoppingCartProducts() {
		$seq = 1;
		$_SESSION[netTotal] = 0;
		for($i=1; $i < count($_SESSION[shoppingCartArr]); $i++) {
			if($_SESSION[shoppingCartArr][$i]['productId'] != "") {
				$productInfo = getProductInfoById($_SESSION[shoppingCartArr][$i]['productId']);
				if($productInfo->pdt_discount_ratio == "") {
					$tempTotal = $productInfo->pdt_price*$_SESSION[shoppingCartArr][$i]['productQuantity'];
				} else {
					$discount = ($productInfo->pdt_price*$productInfo->pdt_discount_ratio)/100;
					$tempTotal = ($productInfo->pdt_price*$_SESSION[shoppingCartArr][$i]['productQuantity'])-($discount*$_SESSION[shoppingCartArr][$i]['productQuantity']);
				}
				$_SESSION[netTotal] += $tempTotal;
				echo '<tr>
						<td>'.$i.'</td>
						<td>'.$productInfo->pdt_name.'</td>
						<td>'.$productInfo->pdt_price.'</td>
						<td>'.$_SESSION[shoppingCartArr][$i]['productQuantity'].'</td>
						<td>'.$productInfo->pdt_discount_ratio.' %</td>
						<td>'.$tempTotal.' /-</td>
						<td><a href="'.SITE_URL.'my_cart.php?pdid='.$i.'">Delete</a></td>
					</tr>';
				$seq++;
			}
		}
		echo '<tr>
				<td colspan="5" class="txtAlignRight"> Total </td>
				<td>'.$_SESSION[netTotal].' /-</td>
				<td><a href="'.SITE_URL.'my_cart.php?action=clearall" class="fontBold">Empty Cart</a></td>
			</tr>';
	}
	
	
	function showProductsByKeyword($searchKeyword) {
		$sql = "SELECT * FROM tbl_products WHERE pdt_status=1 
				AND pdt_name LIKE upper('%$searchKeyword%') 
				OR pdt_detail LIKE upper('%$searchKeyword%')";
		$records = getAllRecords($sql, "_app_utils -95 ");
		echo '<h3>SEARCH RESULT :</h3>';
		echo '<table align="center" width="400px" cellspacing="25">';
		$noOfRecords = count($records);
		$recordCounter = 1;
		$noOfDesiredColumn = 3;
		foreach($records as $rc) {
			if($recordCounter == 1) echo '<tr>';

			echo '<td><a href="index.php?pdt='.$rc->pdt_id.'"><img src="'.SITE_URL.'images/products/'.$rc->pdt_image.'" alt="'.$rc->pdt_name.'" /><br />'.$rc->pdt_name.'</a></td>';
			$recordCounter++;
			$noOfRecords--;

			// Print the extraa TD(s)
			if($noOfRecords == 0) {
				if(($recordCounter-1) != $noOfDesiredColumn)
					for($i=0; $i<=($noOfDesiredColumn-$recordCounter); $i++) echo '<td>&nbsp;</td>';
					$recordCounter += $i;
			}
			#--/\--#
			
			if($recordCounter > $noOfDesiredColumn) {
				echo '</tr>';
				$recordCounter = 1;
			}
		}
		echo '</table>';
	}
	
	function getCustomerInfoById($customerId) {
		$sql = "SELECT * FROM tbl_customer_registrations
				WHERE user_id=$customerId";
		$result = getSingleRecord($sql, "_app_utils -128 ");
		return $result;
	}
?>