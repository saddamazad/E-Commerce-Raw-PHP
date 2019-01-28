// JavaScript Document

function validateRegistrationForm(){
	if(isNull('suf_userNameTxt')){
		if(isNull('suf_userEmailTxt')){
			if(verifyEmail('suf_userEmailTxt')){
				if(isNull('suf_userPasswordTxt')){
					if(lengthCheck('suf_userPasswordTxt', 6, 'Password can not be less than 6 characters')){
						if(isNull('suf_userConfPassTxt')){
							if(isEqual('suf_userPasswordTxt', 'suf_userConfPassTxt', 'Password did not match')){
								if(isNull('suf_userContactTxt')){
									if(isNull('suf_userCityTxt')){
										if(isNull('suf_userCountryTxt')){
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
	return false;
}


function validateContactUsForm(){
	if(isNull('cf_visitorNameTxt')){
		if(isNull('cf_visitorEmailTxt')){
			if(verifyEmail('cf_visitorEmailTxt')){
				if(isNullTextArea('cf_visitorMsgTa')){
					return true;
				}
			}
		}
	}
	return false;
}


function validateSearchForm(){
	if(checkSearchForm('sf_keywordTxt')){
		return true;
	}
	return false;
}



function onclickChange(eId){
	if(document.getElementById(eId).value == "search ...")
		document.getElementById(eId).value = "";
		document.getElementById(eId).style.color = '#333333';
}

function onBlurChange(eId){
	var theElement = document.getElementById(eId);
	if(theElement.value != "") {
		theElement.style.color = '#333333';
	}else if(theElement.value == "") {
		theElement.value = "search ...";
		theElement.style.color = '#999999';
	}
}




function validatePasswordUpdateForm() {
	if(isNull('puf_userNewPassTxt')){
		if(lengthCheck('puf_userNewPassTxt', 6, 'Password can not be less than 6 characters')){
			if(isNull('puf_userConfPassTxt')){
				if(isEqual('puf_userNewPassTxt', 'puf_userConfPassTxt', 'Password did not match')){
					return true;
				}
			}
		}
	}
	return false;
}
