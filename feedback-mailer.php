<!-- After 10 seconds, redirect to a different page. In this case, Google. -->
<meta http-equiv='refresh' content='10; url=https://google.com/'>
<meta charset="UTF-8" />
<!-- The PHP logic begins. -->
<?php
// Time to get the variables from the user’s request. Once we execute these four commands, we’ll have the user’s data in our variables.
$name = $_POST['name'];
$email = $_POST['email'];
$header = $_POST['header'];
$message = $_POST['message'];
// Creating the email message that we’ll send.
$mes = "Name: $name \nE-mail: $email \nSubject: $header \nMessage: $message";
// Trying to send the message using the PHP mailer module.
$send = mail ($email,$header,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
// If send successful:
if ($send == 'true')
// ‘Echo’ returns some text back to the webpage.
{echo "Message sent";}
// If send fails:
else {echo "Something went wrong";}
?>
