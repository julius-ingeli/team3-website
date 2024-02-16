<?php

include "../db.php";




// Check if the user is already logged in, redirect to profile page
if(isset($_SESSION['id'])) {
    header("Location: editprofile.php");
    exit();
}

// Process login form submission
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Validate user credentials, e.g., against database
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT id FROM accountInfo WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the query
    $stmt->execute();

    // Bind the result
    $stmt->bind_result($user_id);

    $stmt->fetch();

    // Start session and store user ID
    if($user_id){
        $_SESSION['id'] = $user_id;
        $url= "editprofile.php?id=".$user_id;
        echo $user_id;
        echo "<script>window.location.href = '$url' ;</script>";
        exit();
    }
    
   

    // Redirect to profile page
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <input type="text" name="email" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>