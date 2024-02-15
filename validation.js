

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
    let isValid = validateFname() && validateLname() && validateEmail() && validateDob();
    updbutton.disabled = !isValid;
    }

if(document.getElementById("delete")){
    var delbutton =document.getElementById("delete");
    lnameError.innerHTML = "I work";
    function deleteConf(){
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
    

    document.getElementById("fname").addEventListener("input",checkFieldsValidity);
    document.getElementById("lname").addEventListener("input",checkFieldsValidity);
    document.getElementById("email").addEventListener("input",checkFieldsValidity);
    document.getElementById("dob").addEventListener("input", checkFieldsValidity);
    document.getElementById("delete").addEventListener("click", deleteConf);    
    checkFieldsValidity();
}
