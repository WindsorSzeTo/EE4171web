function validateName(){
	var username = document.getElementById("username").value;
	username.trim();
	
	if (username.length >0){
		var regexp = /^([A-z',.\s?]+)$/;
		
		if(regexp.test(username)){
			return true;
		}
		else{
			alert("Incorrect format, kindly re-enter")
			return false;
		}
		
	}
	alert("Please fill in your name.");
	return false;
}

function validatePassword(){
	var password = document.getElementById("password").value;
	password.trim();
	
	if (password.length >0){
	    var regexp = /^([A-z',.\s?]+)$/;
		
		if(regexp.test(password)){
			return true;
		}
		else{
			alert("Incorrect format, kindly re-enter")
			return false;
		}
		
	}
	alert("Please fill in your password.");
	return false;
}

function validatePassword2(){
	var password = document.getElementById("password2").value;
	password.trim();
	
	if (password.length >0){
	    var regexp = /^([A-z',.\s?]+)$/;
		
		if(regexp.test(password)){
			return true;
		}
		else{
			alert("Incorrect format, kindly re-enter")
			return false;
		}
		
	}
	alert("Please fill in your password.");
	return false;
}

function validateEmail(){
	var email = document.getElementById("email").value;
	email.trim();
	
	if (email.length >0){
	//text infront @ can be any length, after @ will be limited to 3 groups
		var regexp = /^([\w.-])+@([\w]+\.){1,3}[A-z]{2,3}$/;
		
		if(regexp.test(email)){
			return true;
		}
		else{
			alert("Incorrect format, kindly re-enter")
			return false;
		}
		
	}
	alert("Please fill in your email.");
	return false;
}

function validatecreditcardnumb(){
	
	var cardno = /^(?:3[47][0-9]{13})$/;
	if(inputtxt.value.match(cardno))
		  {
		return true;
		  }
		else
		  {
		  alert("Not a valid Amercican Express credit card number!");
		  return false;
		  }
}