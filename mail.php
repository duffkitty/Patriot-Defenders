<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "asinatra@pertronix.com";
$subject = "Patriot Pipes Feedback";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<h3>Thank You!</h3><p><a href='index.html'>Click here to return to the site.</a></p>";
?>
