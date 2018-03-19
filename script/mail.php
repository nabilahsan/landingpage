<!--Copied from https://1stwebdesigner.com/php-contact-form-html/-->

<?php 
$email = $_POST['email'];
$formcontent="Message: $message";
$recipient = "news@shootbeta.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>