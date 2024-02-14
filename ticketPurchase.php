<?php
$title = "Ticket purchase";
include 'header.php';
$tier = $_GET["tier"];
switch ($tier)
{
    case 1:
        $printTier = "Day 1 (Saturday) Ticket";
        $price = "99€";
        break;
    case 2:
        $printTier = "Day 2 (Sunday) Ticket";
        $price = "99€";
        break;
    case 3:
        $printTier = "Day 1+2 (Saturday and Sunday) Ticket";
        $price = "179€";
        break;
    case 4:
        $printTier = "Day 1 (Saturday) VIP Ticket";
        $price = "199€";
        break;
    case 5:
        $printTier = "Day 2 (Sunday) VIP Ticket";
        $price = "199€";
        break;
    case 6:
        $printTier = "Day 1+2 (Saturday and Sunday) VIP Ticket";
        $price = "359€";
        break;
}
?>
<div class="row filler-row-50"></div>
<div class="col-6 offset-3">
    <h1> You are purchasing the "<?php echo $printTier ?>" </h1>
</div>
<form name="ticketPurchase" method="post" <?php echo "action='ticketProcess.php?tier=$tier'"?>>
    <div class="col-4 offset-4">
        <label for="cardNum">Card number</label>
        <input type="text" class="form-control" id="cardNum" placeholder="1234 1234 1234 1234" name="cardNum" required>
        <br>
        <label for="doe">Credit card date of expiration</label>
        <input type="date" class="form-control" id="doe" placeholder="mm/yy" name="doe" required>
        <br>
        <label for="cvv">CVV</label>
        <input type="text" class="form-control" id="cvv" placeholder="123" name="cvv" required>
        <br>
        <label for="street">Street</label>
        <input type="text" class="form-control" id="street" placeholder="StreetName 12" name="street" required>
        <br>
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" placeholder="Helsinki" name="city" required>
        <br>
        <label for="postal">Postal code</label>
        <input type="text" class="form-control" id="postal" placeholder="00100" name="postal" required>
        <br>
        <label for="province">Provnice</label>
        <input type="text" class="form-control" id="province" placeholder="Uusimaa" name="province" required>
        <br>
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" placeholder="Finland" name="country" required>
        <br>
        <label for="cardholder">Card holder</label>
        <input type="text" class="form-control" id="cardholder" placeholder="John Doe" name="cardholder" required>
        <br>

        <h2> Total price: <?php echo $price ?> </h2>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <br>
        <div class="row filler-row-50"></div>
    </div>
</form>

<?php
include 'Footer.php';
?>