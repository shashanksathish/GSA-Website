<?php
if(!isset($_POST['submit']))
{
	echo "error; you need to submit the form";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//validation
if(empty($name)||empty($visitor_email))
{
	echo "Name and Email are mandatory!";
	exit;
}

$email_from = 'shashanksathish@gmail.com';
$email_subject = "New Query";
$email_body = "You have a new message from $name.\n";
			  "email address: $visitor_email \n";
			  "message: $message";
$to = 'shashanksathish@gmail.com';
$headers = "From: $email_from \r\n";

\\sending the email
mail($to, $email_subject, $email_body, $headers);
?>	  


