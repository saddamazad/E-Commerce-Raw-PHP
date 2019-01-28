<div id="siteMainContainer" class="fLeft">
<?php
	require_once("includes/_app_utils.php");
	
	if($_GET[pdid] != "") {
		$index = $_GET[pdid];
		$_SESSION[shoppingCartArr][$index]['productId'] = "";
		$_SESSION[shoppingCartArr][$index]['productQuantity'] = "";
	} elseif($_GET[action] == "clearall") {
		$_SESSION[shoppingCartArr] = array(array());
	}

	if($_SESSION[actionMsg] != "") {
		echo $_SESSION[actionMsg];
		$_SESSION[actionMsg] = "";
	}
	
	if($_SESSION[userId] != "") {
		if(count($_SESSION[shoppingCartArr]) > 1) { // if the array size is more than 1.
			echo '<h2>Your shopping items: </h2><br />';
			echo '<table align="center" width="500px" cellpadding="8" cellspacing="1" border="1" class="cartController">
					<tr>
						<th width="30px">Seq</th>
						<th width="100px">Product Name</th>
						<th width="55px">Product Price</th>
						<th width="55px">Product Qty</th>
						<th width="65px">Product Discount</th>
						<th width="95px">Total</th>
						<th width="100px">Action</th>
					</tr>';
			echo getAllShoppingCartProducts();
			echo '</table>';
			echo '<div class="checkoutBtn"><a href="checkout.php">Checkout</a></div>';
		} else {
			echo '<h2>Empty Cart</h2>';
		}
	} else {
		echo '<h2>Empty Cart</h2>';
	}
?>
</div>
<div class="cLeft"></div>