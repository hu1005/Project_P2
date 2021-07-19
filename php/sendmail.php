<?php

$name = $_POST['c_name'];
$phone = $_POST['c_phone'];
$email= $_POST['c_email'];
$subject = $_POST['c_subject'];  
$message = $_POST['c_message'];
  
$to_email = "hupadhyay2012@gmail.com";
$subject = $_POST['c_subject']; 
$body = "Hi, My name is $name and my query is : $message My Contact Details are:- Email Address: $email Phone Number:- $phone";
$headers = "From: hupadhyay2012@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "$name, We have received your query.".PHP_EOL .PHP_EOL .PHP_EOL .PHP_EOL .PHP_EOL;
	
	echo "One of our representatives will contact you shortly";
} else {
    echo "Email sending failed...";
}
?>