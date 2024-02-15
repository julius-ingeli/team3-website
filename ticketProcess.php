<?php
$title = "Ticket order";
include "header.php";
$tier = $_GET['tier'];


//for ticketInfo

$dop = date("Y-m-d");
//tier is already set above

//for paymentInfo

$cardNum = $_POST['cardNum'];
$doe = $_POST['doe'];
$cvv = $_POST['cvv'];
$street = $_POST['street'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$province = $_POST['province'];
$country = $_POST['country'];
$cardholder = $_POST['cardholder'];

include 'db.php';

$ticketSQL = "INSERT INTO ticketInfo (assocAcc, dop, tier, active) VALUES ('1', '$dop', '$tier', '0')";
$paymentSQL = "INSERT INTO paymentInfo (id, cardNum, doe, cvv, street, city, postal, province, country, cardholder) VALUES ('1', '$cardNum', '$doe', '$cvv', '$street', '$city', '$postal', '$province', '$country', '$cardholder')";
//$readid = "SELECT * FROM ticketInfo WHERE id=max(id)";    // not working so commented for now
//$bah = $conn->query($readid);                             // not working so commented for now
//$readResult = $bah->fetch_assoc();                        // not working so commented for now

if($conn->query($ticketSQL) === TRUE && $conn->query($paymentSQL) === TRUE)
{
    echo "<h2 class='h1 col-4 offset-4 text-center'>Order successful!</h2>";
    //echo "<h2> Order number: {$readResult['id']}</h2>";   // not working so commented for now
}
else 
{
    echo "Error " . "<br>" . $ticketSQL . "<br>" . $paymentSQL . "<br>" . $conn->error;
}
$conn->close();

include "footer.php";


//change id in ticketInfo to auto increment, change cardNum in paymentInfo to bigint
?>