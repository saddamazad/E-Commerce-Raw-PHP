<?php
	require_once("_utils.php");
	
	function showCategoriesAsTableRow() {
		$sql = "SELECT * FROM tbl_categories";
		$records = getAllRecords($sql, "_app_utils -5");
		$seq = 1;
		foreach($records as $record) {
			echo '<tr>
					<td>'.$seq.'</td>
					<td>'.$record->cat_title.'</td>
					<td>'.$record->cat_description.'</td>
					<td><a href="'.siteUrl.'dashboard.php?page=category_update&ceid='.$record->cat_id.'">Edit</a> | <a href="'.siteUrl.'dashboard.php?page=category_update&cdid='.$record->cat_id.'">Delete</a></td>
				</tr>';
				$seq++;
		}
	}
	
	function isCategoryExist($catId) {
		$sql = "SELECT cat_id FROM tbl_categories WHERE cat_id=$catId";
		$result = getSingleRecordQuery($sql, "_app_utils -20");
		return $result->cat_id;
	}
	
	function getCategoryInfoById($catId) {
		$sql = "SELECT * FROM tbl_categories WHERE cat_id=$catId";
		$result = getSingleRecordQuery($sql, "_app_utils -26");
		return $result;
	}
	
	function deleteRecordById($catId) {
		$sql = "DELETE FROM tbl_categories WHERE cat_id=$catId";
		$delResult = executeQuery($sql, "_app_utils -32");
		if($delResult) {
			$_SESSION[actionMsg] = '<div class="successMsg">Category bearing ID '.$catId.' has been deleted</div>';
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Delete Operation Failed.</div>';
		}
	}
	
	function getCategoriesAsDropdown($catTitle) {
		$optionSet = "";
		$sql = "SELECT * FROM tbl_categories 
				WHERE cat_title NOT IN ('$catTitle') 
				ORDER BY cat_title ASC";
		$records = getAllRecords($sql, "_app_utils -43");
		$seq = 1;
		foreach($records as $record) {
			$optionSet .= '<option value="'.$record->cat_id.'">'.$record->cat_title.'</option>';
			$seq++;
		}
		return $optionSet;
	}
	
	function showSubCategoriesAsTableRow() {
		$sql = "SELECT * FROM tbl_sub_categories";
		$records = getAllRecords($sql, "_app_utils -56");
		$seq = 1;
		foreach($records as $record) {
			echo '<tr>
					<td>'.$seq.'</td>
					<td>'.$record->subcat_category_id.'</td>
					<td>'.$record->subcat_title.'</td>
					<td>'.$record->subcat_description.'</td>
					<td><a href="'.siteUrl.'dashboard.php?page=subcat_udpate&escid='.$record->subcat_id.'">Edit</a> | <a href="'.siteUrl.'dashboard.php?page=subcat_udpate&dscid='.$record->subcat_id.'">Delete</a></td>
				</tr>';
				$seq++;
		}
	}

	function isSubCategoryExist($subCatId) {
		$sql = "SELECT subcat_id FROM tbl_sub_categories WHERE subcat_id=$subCatId";
		$result = getSingleRecordQuery($sql, "_app_utils -72");
		return $result->subcat_id;
	}

	function getSubcategoryInfoById($subCatId) {
		$sql = "SELECT *,tbl_categories.cat_title 
				FROM tbl_sub_categories,tbl_categories 
				WHERE tbl_sub_categories.subcat_category_id=tbl_categories.cat_id 
				AND tbl_sub_categories.subcat_id=$subCatId";
		$result = getSingleRecordQuery($sql, "_app_utils -78");
		return $result;
	}
	
	function deleteSubCategoryById($subCategoryId) {
		$sql = "DELETE FROM tbl_sub_categories WHERE subcat_id=$subCategoryId";
		$delResult = executeQuery($sql, "_app_utils -87");
		if($delResult) {
			$_SESSION[actionMsg] = '<div class="successMsg">Sub-category bearing ID '.$subCategoryId.' has been deleted</div>';
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Delete Operation Failed.</div>';
		}
	}
	
	function loadSubCategoriesAsOption() {
		$sql = "SELECT * FROM tbl_sub_categories ORDER BY subcat_title ASC";
		$records = getAllRecords($sql, "_app_utils -97 ");
		foreach($records as $record) {
			echo '<option value="'.$record->subcat_id.'">'.$record->subcat_title.'</option>';
		}
	}
	
	function getProductsAsTableRow() {
		$sql = "SELECT * FROM tbl_products";
		$records = getAllRecords($sql, "_app_utils -105");
		$seq = 1;
		foreach($records as $record) {
			$image = '<img src="../images/products/'.$record->pdt_image.'" alt="'.$record->pdt_name.'" />';
			echo '<tr>
					<td>'.$seq.'</td>
					<td>'.$record->pdt_subcat_id.'</td>
					<td>'.$record->pdt_name.'</td>
					<td>'.$record->pdt_detail.'</td>
					<td>'.$image.'</td>
					<td>'.$record->pdt_price.'</td>
					<td>'.$record->pdt_discount_ratio.'</td>
					<td><a href="'.siteUrl.'dashboard.php?page=product_update&epid='.$record->pdt_id.'">Edit</a> | <a href="'.siteUrl.'dashboard.php?page=product_update&dpid='.$record->pdt_id.'">Delete</a></td>
				</tr>';
			$seq++;
		}
	}
	
	function isProductExist($productId) {
		$sql = "SELECT pdt_id FROM tbl_products WHERE pdt_id=$productId";
		$result = getSingleRecordQuery($sql, "_app_utils -125");
		return $result->pdt_id;
	}

	function getProductInfoById($productId) {
		$sql = "SELECT *,tbl_sub_categories.subcat_title 
				FROM tbl_products,tbl_sub_categories 
				WHERE tbl_products.pdt_subcat_id=tbl_sub_categories.subcat_id 
				AND tbl_products.pdt_id=$productId";
		$result = getSingleRecordQuery($sql, "_app_utils -131");
		return $result;
	}
	
	function loadSubCategoriesAsDropdown($subCatTitle) {
		$optionSet = "";
		$sql = "SELECT * FROM tbl_sub_categories 
				WHERE subcat_title NOT IN ('$subCatTitle') 
				ORDER BY subcat_title ASC";
		$records = getAllRecords($sql, "_app_utils -141");
		$seq = 1;
		foreach($records as $record) {
			$optionSet .= '<option value="'.$record->subcat_id.'">'.$record->subcat_title.'</option>';
			$seq++;
		}
		return $optionSet;
	}
	
	function deleteProductById($productId) {
		$pdtImage = "SELECT * FROM tbl_products WHERE pdt_id=$productId";
		$record = getSingleRecordQuery($pdtImage, "_app_utils -154");
		$imageName = "../images/products/".$record->pdt_image;		// **###**###** //
		if(unlink($imageName)) {
			$sql = "DELETE FROM tbl_products WHERE pdt_id=$productId";
			$delResult = executeQuery($sql, "_app_utils -158");
			if($delResult) {
				$_SESSION[actionMsg] = '<div class="successMsg">Product bearing ID '.$productId.' has been deleted</div>';
			}else {
				$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Delete Operation Failed.</div>';
			}
		}
	}
	
	function getCustomersAsTableRow() {
		$sql = "SELECT * FROM tbl_customer_registrations";
		$records = getAllRecords($sql, "_app_utils -164");
		$seq = 1;
		foreach($records as $record) {
			if($record->user_status == 1) $action = "Inactivate";
			else $action = "Activate";
			echo '<tr>
					<td>'.$seq.'</td>
					<td>'.$record->user_name.'</td>
					<td>'.$record->user_email.'</td>
					<td>'.$record->user_contact_no.'</td>
					<td><a href="'.siteUrl.'dashboard.php?page=customer_update&aicid='.$record->user_id.'&aitype='.$record->user_status.'">'.$action.'</a></td>
				</tr>';
			$seq++;
		}
	}
	
	function activeInactiveCustomerById($updateValue, $customerId) {
		$sql = "UPDATE tbl_customer_registrations $updateValue WHERE user_id=$customerId";
		$result = executeQuery($sql, "_app_utils -182 ");
		if($result) {
			$_SESSION[actionMsg] = '<div class="successMsg">Wow! Activate/Inactivate Done</div>';
		} else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Activate/Inactivate Failed.</div>';
		}
	}
	

	function getAdminsAsTableRow() {
		$sql = "SELECT * FROM tbl_admins";
		$records = getAllRecords($sql, "_app_utils -193");
		$seq = 1;
		foreach($records as $record) {
			if($record->admin_type == 1) $adminType = "Super Admin";
			elseif($record->admin_type == 2) $adminType = "Admin";
			else $adminType = "Operator";
			
			if($record->admin_status == 0) $actionTxt = "Activate";
			else $actionTxt = "Inactivate";
			echo '<tr>
					<td>'.$seq.'</td>
					<td>'.$record->admin_name.'</td>
					<td>'.$record->admin_designation.'</td>
					<td>'.$record->admin_login_email.'</td>
					<td>'.$adminType.'</td>
					<td>'.$record->admin_parent_id.'</td>
					<td><a href="'.siteUrl.'dashboard.php?page=admin_update&aiaid='.$record->admin_id.'&aitype='.$record->admin_status.'">'.$actionTxt.'</a></td>
				</tr>';
			$seq++;
		}
	}	
	
	function activeInactiveAdminById($updateValue, $adminId) {
		$sql = "UPDATE tbl_admins $updateValue WHERE admin_id=$adminId";
		$result = executeQuery($sql, "_app_utils -217 ");
		if($result) {
			$_SESSION[actionMsg] = '<div class="successMsg">Wow! Activate/Inactivate Done</div>';
		} else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry, Activate/Inactivate Failed.</div>';
		}
	}
	
	
	function getOrdersAsTableRow() {
		$sql = "SELECT *,tbl_orders.order_customer_id,tbl_orders.order_status 
				FROM tbl_order_detail,tbl_orders 
				WHERE tbl_order_detail.order_dl_order_id=tbl_orders.order_id ";
		$records = getAllRecords($sql, "_app_utils -193");
		foreach($records as $record) {
			if($record->order_status == 1) $status = "Initialized";
			elseif($record->order_status == 2) $status = "Pending";
			elseif($record->order_status == 3) $status = "Processing";
			elseif($record->order_status == 4) $status = "Completed";
			elseif($record->order_status == 5) $status = "Cancelled";

			echo '<tr>
					<td>'.$record->order_dl_id.'</td>
					<td>'.$record->order_id.'</td>
					<td>'.$record->order_customer_id.'</td>
					<td>'.$record->order_dl_product_id.'</td>
					<td>'.$record->order_dl_product_qty.'</td>
					<td>'.$status.'</td>
					<td><a href="'.siteUrl.'dashboard.php?page=order_report&ioid='.$record->order_id.'">Initialized</a> | <a href="'.siteUrl.'dashboard.php?page=order_report&poid='.$record->order_id.'">Pending</a> | <a href="'.siteUrl.'dashboard.php?page=order_report&proid='.$record->order_id.'">Processing</a> | <a href="'.siteUrl.'dashboard.php?page=order_report&coid='.$record->order_id.'">Completed</a> | <a href="'.siteUrl.'dashboard.php?page=order_report&cnoid='.$record->order_id.'">Cancelled</a></td>
				</tr>';
		}
	}	
	
	function updateOrderStatusById($updateValue, $orderId) {
		$sql = "UPDATE tbl_orders $updateValue WHERE order_id=$orderId";
		$result = executeQuery($sql, "_app_utils -243 ");
		if($result) {
			$_SESSION[actionMsg] = '<div class="successMsg">Order Status Updated Successfully.</div>';
		}else {
			$_SESSION[actionMsg] = '<div class="errorMsg">Sorry! Update Operation Failed.</div>';
		}
	}
	
	
	function getOrderProcessingAsTableRow() {
		$sql = "SELECT * FROM tbl_orders WHERE order_status=3";
		$records = getAllRecords($sql, "_app_utils -193");
		foreach($records as $record) {
			if($record->order_status == 3) $status = "Processing";

			echo '<tr>
					<td>'.$record->order_id.'</td>
					<td>'.$record->order_customer_id.'</td>
					<td>'.$record->order_customer_delivery_address .'</td>
					<td>'.$record->order_customer_email.'</td>
					<td>'.$record->order_customer_contact.'</td>
					<td>'.$status.'</td>
				</tr>';
		}
	}	

	function getOrderPendingAsTableRow() {
		$sql = "SELECT * FROM tbl_orders WHERE order_status=2";
		$records = getAllRecords($sql, "_app_utils -193");
		foreach($records as $record) {
			if($record->order_status == 2) $status = "Pending";

			echo '<tr>
					<td>'.$record->order_id.'</td>
					<td>'.$record->order_customer_id.'</td>
					<td>'.$record->order_customer_delivery_address .'</td>
					<td>'.$record->order_customer_email.'</td>
					<td>'.$record->order_customer_contact.'</td>
					<td>'.$status.'</td>
				</tr>';
		}
	}	


	function getOrderCompletedAsTableRow() {
		$sql = "SELECT * FROM tbl_orders WHERE order_status=4";
		$records = getAllRecords($sql, "_app_utils -193");
		foreach($records as $record) {
			if($record->order_status == 4) $status = "Completed";

			echo '<tr>
					<td>'.$record->order_id.'</td>
					<td>'.$record->order_customer_id.'</td>
					<td>'.$record->order_customer_delivery_address .'</td>
					<td>'.$record->order_customer_email.'</td>
					<td>'.$record->order_customer_contact.'</td>
					<td>'.$status.'</td>
				</tr>';
		}
	}	

	function getOrderCancelledAsTableRow() {
		$sql = "SELECT * FROM tbl_orders WHERE order_status=5";
		$records = getAllRecords($sql, "_app_utils -193");
		foreach($records as $record) {
			if($record->order_status == 5) $status = "Cancelled";

			echo '<tr>
					<td>'.$record->order_id.'</td>
					<td>'.$record->order_customer_id.'</td>
					<td>'.$record->order_customer_delivery_address .'</td>
					<td>'.$record->order_customer_email.'</td>
					<td>'.$record->order_customer_contact.'</td>
					<td>'.$status.'</td>
				</tr>';
		}
	}	
	
?>