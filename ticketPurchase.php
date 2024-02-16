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
    default:
        echo "<h2 class='h1'>Error</h2>";
        break;
}
?>
<div class="row filler-row-50"></div>
<div class="col-6 offset-3">
    <h1> You are purchasing the "<?php echo $printTier ?>" </h1>
</div>
<form name="ticketPurchase" method="post" action="">
    <div class="col-4 offset-4">
        <label for="cardNum">Card number (without spaces - see example)</label>
        <input type="number" class="form-control" id="cardNum" placeholder="1234123412341234" name="cardNum" required/>
        <p id="cardNumError"></p>
        <label for="doe">Credit card date of expiration</label>
        <input type="date" class="form-control" id="doe" placeholder="mm/yy" name="doe" required/>
        
        <p id="doeError"></p>
        <label for="cvv">CVV</label>
        <input type="number" class="form-control" id="cvv" placeholder="123" name="cvv" required/>
        
        <p id="cvvError"></p>
        <label for="street">Street</label>
        <input type="text" class="form-control" id="street" placeholder="StreetName 12" name="street" required/>
        
        <p id="streetError"></p>
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" placeholder="Helsinki" name="city" required/>
        
        <p id="cityError"></p>
        <label for="postal">Postal code</label>
        <input type="number" class="form-control" id="postal" placeholder="00100" name="postal" required/>
        
        <p id="postalError"></p>
        <label for="province">Provnice</label>
        <input type="text" class="form-control" id="province" placeholder="Uusimaa" name="province" required/>
        
        <p id="provinceError"></p>
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" placeholder="Finland" name="country" required/>
        
        <p id="countryError"></p>
        <label for="cardholder">Card holder</label>
        <input type="text" class="form-control" id="cardholder" placeholder="John Doe" name="cardholder" required/>
        
        <p id="cardholderError"></p>

        <h2> Total price: <?php echo $price ?> </h2>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <br>
        <div class="row filler-row-50"></div>
    </div>
</form>

<script>
if(document.getElementById("submit"))
{
    function validateCardNum()
    {
        const cardNum = document.getElementById("cardNum").value;
        const cardNumError = document.getElementById("cardNumError");

        if(cardNum.length == 16)
        {
            cardNumError.innerHTML = "";
            return true;
        }
        else
        {
            cardNumError.innerHTML = "Cards that we accept have 16 digit card numbers.";
            return false;
        }
        }
/*
    function validateDOE()
    {
        const doe = document.getElementById("doe").value;
    }
*/
    function validateCVV()
    {
        const cvv = document.getElementById("cvv").value;
        const cvvError = document.getElementById("cvvError");

        if(cvv.length == 3)
        {
            cvvError.innerHTML = "";
            return true;
        }
        else
        {
            cvvError.innerHTML = "CVV should be 3 digits long.";
            return false;
        }
    }

    function validateStreet()
    {
        const street = document.getElementById("street").value;
        const streetError = document.getElementById("streetError");

        if(street.length < 1)
        {
            streetError.innerHTML = "Don't leave this field empty.";
            return false;
        }
        else
        {
            streetError.innerHTML = "";
            return true;
        }
    }

    function validateCity()
    {
        const city = document.getElementById("city").value;
        const cityError = document.getElementById("cityError");

        if(city.length < 1)
        {
            cityError.innerHTML = "Don't leave this field empty.";
            return false;
        }
        else
        {
            cityError.innerHTML = "";
            return true;
        }
    }

    function validatePostal()
    {
        const postal = document.getElementById("postal").value;
        const postalError = document.getElementById("postalError");

        if(postal.length == 5)
        {
            postalError.innerHTML = "";
            return true;
        }
        else
        {
            postalError.innerHTML = "Postal code should be 5 digits long.";
            return false;
        }
    }

    function validateProvince()
    {
        const province = document.getElementById("province").value;
        const provinceError = document.getElementById("provinceError");

        if(province.length < 1)
        {
            provinceError.innerHTML = "Don't leave this field empty.";
            return false;
        }
        else
        {
            provinceError.innerHTML = "";
            return true;
        }
    }

    function validateCountry()
    {
        const country = document.getElementById("country").value;
        const countryError = document.getElementById("countryError");

        if(country.length < 1)
        {
            countryError.innerHTML = "Don't leave this field empty.";
            return false;
        }
        else
        {
            countryError.innerHTML = "";
            return true;
        }
    }

    function validateCardHolder()
    {
        const cardholder = document.getElementById("cardholder").value;
        const cardholderError = document.getElementById("cardholderError");

        if(cardholder.length < 1)
        {
            cardholderError.innerHTML = "Don't leave this field empty.";
            return false;
        }
        else
        {
            cardholderError.innerHTML = "";
            return true;
        }
    }
}
</script>
<?php 
if(isset($_POST['submit']))
{
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
}

//change id in ticketInfo to auto increment, change cardNum in paymentInfo to bigint
include 'Footer.php';
?>