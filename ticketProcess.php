<?php
$tier = $_GET['tier'];

if(isset($_POST['submit ']))
{
    //for ticketInfo

    $assocAcc = 1 ; //Work in progress
    $dop = date("m.d.Y");
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

    $ticketSQL = "INSERT INTO ticketInfo (assocAcc, dop, tier) VALUES ('$assocAcc', '$dop', '$tier')";
    $paymentSQL = "INSERT INTO paymentInfo (cardNum, doe, cvv, street, city, postal, province, country, cardholder) VALUES ('$cardNum', '$doe', '$cvv', '$street', '$city', '$postal', '$province', '$country', '$cardholder')";

    if($conn->query($ticketSQL) === TRUE)
    {
        echo "Order successful! (Ticket info)"; //remove "(Ticket info)"
    }
    else
    {
        echo "Error" . $ticketSQL . "br" . $conn->error;
    }

    if($conn->query($paymentSQL) === TRUE)
    {
        echo "Order successful! (Payment info)"; //remove "(Payment info)"
    }
    else
    {
        echo "Error" . $paymentSQL . "br" . $conn->error;
    }

    $conn->close();
}
?>