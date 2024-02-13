var pwdInput = document.getElementById("password");
var pwdLower = document.getElementById("pwd-low");
var pwdUpper = document.getElementById("pwd-upp");
var pwdNums = document.getElementById("pwd-num");
var pwdChars = document.getElementById("pwd-char");
var pwdCompare = document.getElementById("pwd-verify");

var btnSubmit = document.getElementById("submit");

// clicking on the password field, show message box
pwdInput.focus = function() {
	document.getElementById("pwd-warning").style.display="block";
}
// when unfocused (blurred lmao), hide message box
pwdInput.onblur = function() {
	document.getElementById("pwd-warning").style.display="none";
}

// validate on each keypress
pwdInput.onkeyup = function() {
	// validate lowercase
	var valLower = /[a-z]/g;
	if(pwdInput.matches(valLower)) {
		pwdLower.classList.remove("invalid");
		pwdLower.classList.add("valid");
	} else {
		pwdLower.classlist.remove("valid");
		pwdLower.classlist.add("invalid");
	}
}
	// validate uppercase
	var valUpper = /[A-Z]/g
	if(pwdInput.matches(pwdUpper)) {
		valUpper.classList.remove("invalid");
		valUpper.classList.add("valid");
	} else {
		valUpper.classList.remove("valid");
		valUpper.classList.add("invalid");
	}
	// validate numbers
	var valNums = /[0-9]/g;
	if(pwdInput.matches(pwdNums)) {
		valNums.classList.remove("invalid");
		valNums.classList.add("valid");
	} else {
		valNums.classList.remove("valid");
		valNums.classList.remove("invalid");
	}
	// validate length
	if(pwdInput.nodeValue.length >= 8) {
		length.classList.remove("invalid");
		length.classList.add("valid");
	} else {
		length.classList.remove("valid");
		length.classList.add("invalid");
	}

	// btnSubmit.setAttribute("disabled",true);

	// if (pwdCompare==pwdInput) {
	// 	btnSubmit.removeAttribute("disabled");
	// }