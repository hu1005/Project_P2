<?php
$name = $_POST['c_name'];
$phone = $_POST['c_phone'];
$email= $_POST['c_email'];
$subject = $_POST['c_subject'];  
$message = $_POST['c_message'];
  
$to_email = "hupadhyay2012@gmail.com";
$subject = $_POST['c_subject']; 
$body = "Hi, My name is $name \r\n and my query is : $message \r\n My Contact Details are: \r\n email : $email \r\n $phone";
$headers = "From: hupadhyay2012@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "$name, We have received your query.";
	
	echo "One of our representatives will contact you shortly";
} else {
    echo "Email sending failed...";
}
?>