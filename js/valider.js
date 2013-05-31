// JavaScript Document


function formValidator()
{
	var feedback_email=document.getElementById('feedback_email');	
	var chk1="";
	chk1 = email(feedback_email,"please enter only letters in your name");
	if(chk1 == true )
	return true;
	else
	return false;
}


function email(elem, helperMsg){
	var alphaExp = "/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/";
	if(elem.value.match(alphaExp)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

