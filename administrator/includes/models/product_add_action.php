<?php
	require_once("../libs/product_add_action_class.php");

	if($_POST[anpf_submitBtn] == "Add Product") {
		// Read the form
		$pdtSubCategoryId = $_POST[anpf_subCatgoryId];
		$productName = $_POST[anpf_productName];
		$productDetail = $_POST[anpf_productDetail];
		// $productImg = $_FILES[anpf_productImg];
		$productPrice = $_POST[anpf_productPrice];
		$pdtWholesellPrice = $_POST[anpf_wholesellPrice];
		$pdtDiscountRatio = $_POST[anpf_discountRatio];
		$pdtModelNo = $_POST[anpf_modelNo];
		$pdtCashMemoNo = $_POST[anpf_cash_memo_no];
		
		$newProductId = getNewProductId();
		
		if ((($_FILES["anpf_productImg"]["type"] == "image/gif")
		|| ($_FILES["anpf_productImg"]["type"] == "image/jpeg")
		|| ($_FILES["anpf_productImg"]["type"] == "image/pjpeg"))
		&& ($_FILES["anpf_productImg"]["size"] < 100000)) { 
			if ($_FILES["anpf_productImg"]["error"] > 0) {
				echo "Error: " . $_FILES["anpf_productImg"]["error"] . "<br />";
			} else {
				$imageSource = $_FILES["anpf_productImg"]["tmp_name"];

				$fileArray = explode(".",$_FILES["anpf_productImg"]["name"]);
				$arraySize = count($fileArray);
				$categoryIdLength = strlen(strval($newProductId));
				$encStrLength = 32 - ($categoryIdLength + 3); 
				$imageName = "p_".$newProductId."_".substr(md5($_FILES["anpf_productImg"]["name"]),4,$encStrLength).".".$fileArray[$arraySize-1];
				$imageDestinationNameWithPath = "../../../images/products/$imageName";

				if(move_uploaded_file($imageSource, $imageDestinationNameWithPath)) { 
					$insertValues = "VALUES($newProductId,
											$pdtSubCategoryId,
											'$productName',
											'$productDetail',
											'$imageName',
											'$productPrice',
											'$pdtWholesellPrice',
											'$pdtDiscountRatio',
											'$pdtModelNo',
											'$pdtCashMemoNo',
											now(),now(),2 )";
									
					$insertAction = insertNewProduct($insertValues, "product_add_action-35");
					
					if($insertAction) {
						$_SESSION[actionMsg] = '<div class="successMsg">Wow! Insertion Done Successfully.</div>';
					}else
						$_SESSION[actionMsg] = '<div class="errorMsg">Alas! Insertion Failed.</div>';
					}
				}
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Alas! You are not aware of file type and validation.</div>';
		}				
		header("Location: ".siteUrl."dashboard.php?page=product_add");
	}elseif($_POST[upf_submitBtn] == "Update Product") {
		// Read the form
		$pdtSubCategoryId = $_POST[upf_subCatgoryId];
		$productName = $_POST[upf_productName];
		$productDetail = $_POST[upf_productDetail];
		// $productImg = $_FILES[anpf_productImg];
		$productPrice = $_POST[upf_productPrice];
		$pdtWholesellPrice = $_POST[upf_wholesellPrice];
		$pdtDiscountRatio = $_POST[upf_discountRatio];
		$pdtModelNo = $_POST[upf_modelNo];
		$pdtCashMemoNo = $_POST[upf_cash_memo_no];
		
		$productId = $_POST[upf_productId];
		
		if($_FILES[upf_productImg] == "") {
			$updateValues = "SET pdt_subcat_id=$pdtSubCategoryId,
								 pdt_name='$productName',
								 pdt_detail='$productDetail',
								 pdt_price='$productPrice',
								 pdt_wholesell_price='$pdtWholesellPrice',
								 pdt_discount_ratio='$pdtDiscountRatio',
								 pdt_model_no='$pdtModelNo',
								 pdt_cash_memo_no='$pdtCashMemoNo',
								 pdt_udate=now() ";
			$updateAction = updateProductById($updateValues, $productId, "product_add_action - 74");
			if($updateAction) {
				$_SESSION[actionMsg] = '<div class="successMsg">Wow! Update Done Successfully</div>';
			}else {
				$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Update Operation Failed</div>';
			}
		}else {
			if ((($_FILES["upf_productImg"]["type"] == "image/gif")
			|| ($_FILES["upf_productImg"]["type"] == "image/jpeg")
			|| ($_FILES["upf_productImg"]["type"] == "image/pjpeg"))
			&& ($_FILES["upf_productImg"]["size"] < 100000)) { 
				if ($_FILES["upf_productImg"]["error"] > 0) {
					echo "Error: " . $_FILES["upf_productImg"]["error"] . "<br />";
				} else {
					$imageSource = $_FILES["upf_productImg"]["tmp_name"];
	
					$fileArray = explode(".",$_FILES["upf_productImg"]["name"]);
					$arraySize = count($fileArray);
					$categoryIdLength = strlen(strval($productId));
					$encStrLength = 32 - ($categoryIdLength + 3); 
					$imageName = "p_".$productId."_".substr(md5($_FILES["upf_productImg"]["name"]),4,$encStrLength).".".$fileArray[$arraySize-1];
					$imageDestinationNameWithPath = "../../../images/products/$imageName";
	
					if(move_uploaded_file($imageSource, $imageDestinationNameWithPath)) { 
						$updateValues = "SET pdt_subcat_id=$pdtSubCategoryId,
											 pdt_name='$productName',
											 pdt_detail='$productDetail',
											 pdt_image='$imageName',
											 pdt_price='$productPrice',
											 pdt_wholesell_price='$pdtWholesellPrice',
											 pdt_discount_ratio='$pdtDiscountRatio',
											 pdt_model_no='$pdtModelNo',
											 pdt_cash_memo_no='$pdtCashMemoNo',
											 pdt_udate=now() ";
										
						$updateAction = updateProductById($updateValues, $productId, "product_add_action - 107");
						if($updateAction) {
							$_SESSION[actionMsg] = '<div class="successMsg">Wow! Update Done Successfully.</div>';
						}else
							$_SESSION[actionMsg] = '<div class="errorMsg">Alas! Update Failed.</div>';
						}
					}
			}else {
				$_SESSION[actionMsg] = '<div class="errorMsg">Alas! You are not aware of file type and validation.</div>';
			}				
		}
		header("Location: ".siteUrl."dashboard.php?page=product_update");
	}else {
		echo '<h2>This area is only for authorized users.</h2>';
	}
?>