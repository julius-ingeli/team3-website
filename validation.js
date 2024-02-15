if (document.getElementById("submit")){
    var updbutton =document.getElementById("submit");


    function validateFname(){
        const fname =document.getElementById("fname").value;
        const fnameError =document.getElementById("fnameError");
        if(fname.length < 1){
            fnameError.innerHTML = "First name should not be empty!";

            return false;

        }
        else{
            fnameError.innerHTML = "";

            return true;

        }
    }

    function validateLname(){
        const lname =document.getElementById("lname").value;
        const lnameError =document.getElementById("lnameError");
        if(lname.length < 1){
            lnameError.innerHTML = "Last name should not be empty!";

            return false;
        }
        else{
            lnameError.innerHTML = "";

            return true;

        }
    }

    function validateEmail(){
        const email =document.getElementById("email").value;
        const emailError =document.getElementById("emailError");
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(email)){
            emailError.innerHTML = "Email address invalid!";

            return false;
        }
        else{
            emailError.innerHTML = "";

            return true;

        }
    }

    function validateDob(){
        const currDate = new Date();
        const dob = new Date(document.getElementById("dob").value);
        var difference = currDate - dob;
        var age = Math.floor(difference/(1000 * 60 * 60 * 24 * 365.25))
        console.log(age);
        const dobError =document.getElementById("dobError");
        if(age < 18){
            dobError.innerHTML = "You are not eighteen years old!";

            return false;
        }
        else{
            dobError.innerHTML = "";

            return true;

        }


    }
    function checkFieldsValidity() {
        //disables buttons if there is invalid data
        let isValid = validateFname() && validateLname() && validateEmail() && validateDob();
        updbutton.disabled = !isValid;
        }

    document.getElementById("fname").addEventListener("input",checkFieldsValidity);
    document.getElementById("lname").addEventListener("input",checkFieldsValidity);
    document.getElementById("email").addEventListener("input",checkFieldsValidity);
    document.getElementById("dob").addEventListener("input", checkFieldsValidity);
    document.getElementById("delete").addEventListener("click", deleteConf);    
    checkFieldsValidity();    
}


//password validation
if(document.getElementById("password")&& document.getElementById("pwd-low") && document.getElementById("pwd-upp") && document.getElementById("pwd-num") && document.getElementById("pwd-char") && document.getElementById("pwd-verify")){
    var pwdInput = document.getElementById("password");
var pwdLower = document.getElementById("pwd-low");
var pwdUpper = document.getElementById("pwd-upp");
var pwdNums = document.getElementById("pwd-num");
var pwdChars = document.getElementById("pwd-char");
var pwdCompare = document.getElementById("pwd-verify");

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

}




if(document.getElementById("delete")){
    var delbutton =document.getElementById("delete");
    function deleteConf(){
        //delete alert window
        var confirmation = window.confirm("Are you sure you want to delete the information?");


        if (!confirmation) {
            event.preventDefault();
            alert("Deletion canceled.");
        } 
        else {
            event.preventDefault();
            alert("Information deleted.");
        }

    }
    


}
