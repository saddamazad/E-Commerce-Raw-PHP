// JavaScript Document

var borderForDefault = '1px solid #666666';
var borderForError = '1px solid #990000';

/*
	Functions for form validations
	by Mohammad Belal Hossain
	on February 2009
	parameter: eid = element id
	return: if value is null it returns false
*/
function isNull(eid) {
	var theElement = document.getElementById(eid);
	var theVal = theElement.value;

	if(theVal == ""){
		alert("You can not leave this field blank");
		theElement.style.border = borderForError;
		theElement.focus();
		return false;
	}
	theElement.style.border = borderForDefault;
	return true;
}

function verifyEmail(eid){
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

	 if (document.getElementById(eid).value.search(emailRegEx) == -1) {
		alert("Please enter a valid email address.");
		document.getElementById(eid).style.border = borderForError;
		document.getElementById(eid).focus();
		return false;
     }
	 document.getElementById(eid).style.border = borderForDefault;
     return true;
}

function isChecked(eid) {
    var val = document.getElementById(eid).checked;
    if(!val){
        alert("Please accept the agreements Policy");
        document.getElementById(eid).focus();
        return false;
    }
    return true;
}

function isSelect(eid) {
    var val = document.getElementById(eid).value;

    if(val == "-99"){
        alert("Please Select Data");
        document.getElementById(eid).style.border = borderForError;
        document.getElementById(eid).focus();
        return false;
    }
    document.getElementById(eid).style.border = borderForDefault;
    return true;
}

function checkRadio (frmName, rbGroupName) {
 var radios = document[frmName].elements[rbGroupName];
 for (var i=0; i <radios.length; i++) {
  if (radios[i].checked) {
   return true;
  }
 }
 return false;
}

function isNumeric(eid) {
    var val = document.getElementById(eid).value;
   
    var anum=/(^\d+$)|(^\d+\.\d+$)/
    if (!anum.test(val)){
        alert("Value should be numeric value");
        document.getElementById(eid).style.border = borderForError;
        document.getElementById(eid).focus();
        return false;
    }
    document.getElementById(eid).style.border = borderForDefault;
    return true;
}

function isNullTextArea(eid) {
	var theElement = document.getElementById(eid);
	var theInner = theElement.value;
	// var value = theInner.value;

	if(theInner == ""){
		alert("You can not leave this field blank");
		theElement.style.border = borderForError;
		theElement.focus();
		return false;
	}
	theElement.style.border = borderForDefault;
	return true;
}


function checkSearchForm(eId){
	var theElement = document.getElementById(eId);
	var val = theElement.value;
	
	if(val == "search ..."){
		alert('Please Enter Search Keyword');
		theElement.style.border = borderForError;
		theElement.focus();
		return false;
	}
	theElement.style.border = borderForDefault;
	return true;
}


function isEqual(eId1, eId2, errMsg){
	var firstElement = document.getElementById(eId1);
	var secondElement = document.getElementById(eId2);
	if(firstElement.value != secondElement.value){
		alert(errMsg);
		firstElement.style.border = borderForError;
		secondElement.style.border = borderForError;
		firstElement.focus();
		secondElement.value = '';
		return false;
	}
	firstElement.style.border = borderForDefault;
	secondElement.style.border = borderForDefault;
	return true;
	
}

function lengthCheck(eId, validLength, errMsg){
	var element = document.getElementById(eId);
	if(element.value.length < validLength){
		alert(errMsg);
		element.style.border = borderForError;
		element.focus();
		return false;
	}
	element.style.border = borderForDefault;
	return true;
}


/*
/(^\d+$)|(^\d+\.\d+$)/

The two in red are the two formats it's searching for.

To decipher it, you need to know some syntax rules (see this link):

^ matches the beginning of the string
$ matches the end of the string
\d matches a digit
+ means match 1 or more of the preceeding
| means or

So, the first one will match any number of digits, ex:
3
64492923

The second piece matches 1 or more digits, a period, then one or more digits, ex:
23.53
24234234.22223


Hope that helps.

Source: http://ubuntuforums.org/showthread.php?t=973503
*/