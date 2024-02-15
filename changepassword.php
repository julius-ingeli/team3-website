<?php
$title = 'Change Password';
include 'header.php';
include 'db.php';
$a = $_GET['id'];
?>
    <form name= 'form1' method='post' action=''>
        <div class='row'>
            <div class='col'>
                <input type='password' class='form-control' placeholder='Current password' id='currpasswd' name='currpasswd' required'>
            </div>
            <div class='col'></div>
        </div> 
        <br>
        <div class='row'>
            <div class='col'>
                <input type='password' class='form-control' placeholder='New Password' id='newpasswd' name='newpasswd' required '>
            </div>
            <div class='col'>
                <input type='password' class='form-control' placeholder='Confrim New Password' id='newnewpasswd' name='newnewpasswd' required>
            </div>
            <span id = 'passwdErr' style='color:red'></span>
        </div>
    

  <div class='row'>
  <div class='col'><button type='submit' class='btn btn-success' id= 'submit' name='submit'>Submit</button></div>
</div>
</form>
<br><br><br><br><br>
<script>
    // I am about to commit something unholy here, cover your eyes
    function validatePasswds(){
        const newpasswd = document.getElementById('newpasswd').value;
        const newnewpasswd = document.getElementById('newnewpasswd').value;
        const passwdErr = document.getElementById("passwdErr");
        const passwdRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\d\s])(.{8,})$/;
        if(passwdRegex.test(newpasswd)){

            if(newpasswd != newnewpasswd){
                passwdErr.innerHTML = 'Passwords need to be same.';
                submit.disabled = true;
                return false;
            }
            else{
                passwdErr.innerHTML = '';
                submit.disabled = false;
                return true;
            }
        }
        else{
            passwdErr.innerHTML = 'Your password aint shit'
            submit.disabled = true;

        }
    }


    document.getElementById('newpasswd').addEventListener('input',validatePasswds);
    document.getElementById('newnewpasswd').addEventListener('input',validatePasswds);

</script>

<?php


if (isset($_POST['submit'])){
    $currcurrpasswd = mysqli_fetch_array(mysqli_query($conn,"SELECT passwd FROM accountInfo WHERE id=$a "))['passwd']; // this is terrible
    $currpasswd = $_POST['currpasswd'];
    $newpasswd = $_POST['newpasswd'];
    $newnewpasswd = $_POST['newnewpasswd'];
    

    if($currpasswd!= $currcurrpasswd){
        echo "Your current password is invalid! Try again.";
    }
    else{
    }


   

    $query = "UPDATE accountInfo set passwd=? where id=?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        echo "DEBUG: Error preparing statement: " . $conn->error;
    }

    else{
        $stmt->bind_param("si", $newpasswd, $a);
        if($stmt->execute()){
            echo "<h2>Your password was updated Successfully</h2>";
            
        }
        else{

            echo "<h2Record Not modified due to error:<h2>" . $conn->error;
            
        }
    }
    

}

include 'footer.php';
?>