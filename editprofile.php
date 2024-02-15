<?php
$title = "Edit Profile";
include_once "header.php";
include "db.php";


$a = $_GET['id'];
if($a == 1){
    echo "<button type='button' class='btn btn-warning'><a href='seealldata.php' style='color:black; text-decoration: none'>See all user data here</a></button>";
}

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


<button class="btn btn-warning" id="chngpasswd" name="chngpasswd"><a href="changepassword.php?id=<?php echo $a?>" style = "color:black;text-decoration:none">Change Password</a></button>
<!-- validation script -->
<script src="validation.js"></script>


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