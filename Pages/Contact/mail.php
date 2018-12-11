<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$country = $_POST['country']
	$priority = $_POST['priority'];
	$type = $_POST['type'];
	$message = $_POST['message'];
	$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Country: $country \n Priority: $priority \n Type: $type \n Message: $message";
	$recipient = "joshuabentley2k18@gmail.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You!";
?>
