<?php
$title = "Edit Profile";
include "header.php";
include "db.php";

$a = "1";
$result = mysqli_query($conn,"SELECT * FROM accountInfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<h1>Edit profile</h1>

<form name= "form1" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" id="fname" name="fname" required value="<?php echo $row['fname']; ?>">
    </div>
    <span id="fnameError"></span>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname" required value="<?php echo $row['lname']; ?>" >
    </div>
    <span id="lnameError"></span>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="email" id="email" name="email" required value="<?php echo $row['email']; ?>">
    </div>
    <span id="emailError"></span>
    <div class="col">
      <input type="date" class="form-control" placeholder="dob" id="dob" name="dob" required value="<?php echo $row['dob']; ?>">    
    </div>
    <span id="dobError"></span>

  </div>
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-success" id= "submit" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-danger" id="delete" name="delete">Delete your Information</button></div>
</div>
</form>

<script>
var updbutton =document.getElementById("submit");
var delbutton =document.getElementById("delete");

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
    delbutton.disabled = !isValid;
}


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
</script>


<?php



if (isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];


    //$query = mysqli_query($conn,"UPDATE accountInfo set fname='$fname', lname='$lname', email='$email', dob='$dob' where id='$a'");
    $query = "UPDATE accountInfo set fname=?, lname=?, email=?, dob=? where id=?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        // Check if the prepare() method failed
        echo "DEBUG: Error preparing statement: " . $conn->error;
    }
    else{
        $stmt->bind_param("ssssi", $fname, $lname, $email, $dob, $a);
        if($stmt->execute()){
            echo "<h2>Your information is updated Successfully</h2>";
            // if you want to redirect to update page after updating
        }
        else{
            if($conn->errno == 1062){
                echo "<h2>Email is already in use, please choose a different email<h2>";
            }
            else{
                echo "<h2Record Not modified due to error:<h2>" . $conn->error;
            }
        }
    }
    


}

if (isset($_POST['delete'])){
    $query = mysqli_query($conn,"DELETE FROM accountInfo where id='$a'");
    if($query){
        echo "Account deleted!";
    }
    else { echo "Record Not Deleted";}
}


$conn->close();



include "footer.php";
?>