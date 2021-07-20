
<?php 
error_reporting(0);
    include('connection.php');  
    $phone = $_POST['fu_phone'];  
	 $email = $_POST['fu_email'];  

// database insert SQL code
$sql = "Select name from signup where(phone = '$phone' && email = '$email')";

// insert in database 
$rs = mysqli_query($con,$sql);

	while($row = mysqli_fetch_assoc($rs)){
      $result = $row['name'];
   	}

$to_email = "projectp2intern@gmail.com";
$subject = "Your Username"; 
$body = "Hi,We just received your forgot username request. The username for the entered Phone :- $phone is:- $result";
$headers = "From: projectp2intern@gmail.com";

if(mail($to_email, $subject, $body, $headers)) 
{
	echo "Your username has been successfully sent on your registered Email address";
	
}

else
{
	echo "Sorry, we could not find the entered Username and Email Address combination in our database.";
	

}
?>  