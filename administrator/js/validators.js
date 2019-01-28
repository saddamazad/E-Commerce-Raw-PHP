// JavaScript Document

function validateAddNewProductForm(){
	if(isSelect('anpf_subCatgoryId')){
		if(isNull('anpf_productName')){
			if(isNull('anpf_productImg')){
				if(isNull('anpf_productPrice')){
					if(isNull('anpf_discountRatio')){
						if(isNumeric('anpf_discountRatio')){
							if(isNull('anpf_currentStock')){
								if(isNumeric('anpf_currentStock')){
									if(isNull('anpf_purchase_price')){
										if(isNumeric('anpf_purchase_price')){
											if(isNull('anpf_cash_memo_no')){
												return true;
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
	return false;
}


function validateUpdateProductForm(){
	var theElement = document.getElementById('upf_productImg');
	var theAtr = theElement.getAttribute('disabled');
	if(theAtr) {
		if(isSelect('upf_subCatgoryId')) {
			return true;
		}
	}else {
		if(isSelect('upf_subCatgoryId')){
			if(isNull('upf_productImg')) {
				return true;
			}
		}
	}
	return false;
}


function validateSubCategoryAddForm(){
	if(isSelect('scaf_categoryListSel')){
		if(isNull('scaf_scategoryTitleTxt')){
			if(isNull('scaf_scategoryImageFile')){
				return true;
			}
		}
	}
	return false;
}



function validateSubCategoryUpdateForm(){
	var theElement = document.getElementById('scuf_scategoryImageFile');
	var theAtr = theElement.getAttribute('disabled');
	if(theAtr) {
		if(isSelect('scuf_categoryId')) {
			return true;
		}
	}else {
		if(isSelect('scuf_categoryId')){
			if(isNull('scuf_scategoryImageFile')) {
				return true;
			}
		}
	}
	return false;
}



function validateCategoryAddForm(){
	if(isNull('caf_categoryTitleTxt')){
		if(isNull('caf_categoryImageFile')){
			return true;
		}
	}
	return false;
}



function validateCategoryUpdateForm(eId){
	var theElement = document.getElementById(eId);
	var theAtr = theElement.getAttribute('disabled');
	if(theAtr) {
		return true;
	}else {
		if(isNull(eId)) {
			return true;
		}
	}
	return false;
}



function validateAddNewAdminForm(){
	if(isNull('anaf_userName')){
		if(isSelect('anaf_adminType')){
			if(isNull('anaf_loginEmail')){
				if(verifyEmail('anaf_loginEmail')){
					if(isNull('anaf_password')){
						return true;
					}
				}
			}
		}
	}
	return false;
}



function validateUpdateAdminForm(){
	if(isSelect('uaf_adminType')){
		return true;
	}
	return false;
}



function validateUpdateAdminPassForm(){
	if(isNull('uapf_adminNewPassword')){
		if(isNull('uapf_adminConfPassword')){
			if(isEqual('uapf_adminNewPassword', 'uapf_adminConfPassword', 'Password does not match')){
				return true;
			}
		}
	}
	return false;
}


function validateFileUploadBtn(eId, eId2) {
	var theElement = document.getElementById(eId);
	var elementTwo = document.getElementById(eId2).checked;
	if(elementTwo) {
		theElement.removeAttribute('disabled');
	}else {
		theElement.setAttribute('disabled','disabled');
	}
}


function validateForgotPassForm() {
	if(isNull('npf_newPassword')){
		if(isNull('npf_confPassword')){
			if(isEqual('npf_newPassword', 'npf_confPassword', 'Password does not match')){
				return true;
			}
		}
	}
	return false;
}
