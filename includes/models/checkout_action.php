<?php
	require_once("../libs/checkout_action_class.php");
	
	if($_POST[cof_submitBtn] == "Checkout") {
		// Read the form
		$customerDeliveryAddress = $_POST[cof_deliveryAddressTa];
		$customerEmailAddress = $_POST[cof_userEmailTxt];
		$customerContactNo = $_POST[cof_userContactTxt];
		
		$newOrderId = getNewOrderId();
		$customerId = $_SESSION[userId];
		
		$insertValues = "VALUES($newOrderId,
								$customerId,
								'$customerDeliveryAddress',
								'$customerEmailAddress',
								'$customerContactNo',
								now(),
								now(),1 )";
		$insertOrderAction = insertOrder($insertValues, "checkout_action -13 ");
		if($insertOrderAction) {
			for($i=1; $i < count($_SESSION[shoppingCartArr]); $i++) {
				$newOrderDlId = getNewOrderDlId();
				$productId = $_SESSION[shoppingCartArr][$i]['productId'];
				$productQty = $_SESSION[shoppingCartArr][$i]['productQuantity'];
				
				$productInfo = getProductInfoById($productId);

				$productPrice = $productInfo->pdt_price;
				
				$insertValues = "VALUES($newOrderDlId,
										$newOrderId,
										$productId,
										$productQty,
										'$productPrice' )";
				$insertAction = insertOrderDl($insertValues, "checkout_action -28 ");
				if($insertAction) {
					$_SESSION[actionMsg] = '<div class="successMsg">Thank you for your order. We will contact with you as soon as possible.</div>';
				} else {
					$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Order operation failed. Please contact with system admin.</div>';
				}				
			}
		}
		header("Location: ".SITE_URL."my_cart.php");
	} else {
		echo '<h2>This area is only for authorized users.</h2>';
	}
?>