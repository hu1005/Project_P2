
<?php 
error_reporting(0);
    include('connection.php');  
    $name = $_POST['f_name'];  
	 $email = $_POST['f_email'];  

// database insert SQL code
$sql = "Select password from signup where(name = '$name' && email = '$email')";

// insert in database 
$rs = mysqli_query($con,$sql);

	while($row = mysqli_fetch_assoc($rs)){
      $result = $row['password'];
   	}

$to_email = "hupadhyay2012@gmail.com";
$subject = "Your Password"; 
$body = "Hi,We just received your forgot password request. The password for the Username:-$name is:- $result";
$headers = "From: hupadhyay2012@gmail.com";

if(mail($to_email, $subject, $body, $headers)) 
{
	echo "Your password has been successfully sent on your registered Email address";
	
}

else
{
	echo "Sorry, we could not find the entered Username and Email Address combination in our database.";
	

}
?>  