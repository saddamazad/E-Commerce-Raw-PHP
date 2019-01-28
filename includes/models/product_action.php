<?php
	require_once("../_utils.php");

	if($_POST[atcf_addToCartBtn] == "Add To Cart") {
		if($_SESSION[userId] == "") {
			$_SESSION[actionMsg] = '<div class="errorMsg">Please login to purchase product.</div>';
		} else {
			// Read the form
			$productQty = $_POST[atcf_pdtQuantityTxt];
			$pdtId = $_POST[atcf_productId];
	
			if(count($_SESSION[shoppingCartArr]) == 0) $_SESSION[shoppingCartArr] = array(array());
			$currentArraySize = count($_SESSION[shoppingCartArr]);  // output will be '1'. Because $_SESSION[shoppingCartArr][0] - index e already   $_SESSION[shoppingCartArr] = array(array()) ai value ta insert kora hoyeche.
	
			$_SESSION[shoppingCartArr][$currentArraySize]['productId'] = $pdtId;
			$_SESSION[shoppingCartArr][$currentArraySize]['productQuantity'] = $productQty;
			
			$_SESSION[actionMsg] = '<div class="successMsg">Product Added To Your Shopping Cart.</div>';
		}
		header("Location: ".SITE_URL."my_cart.php");
	}
	
?>