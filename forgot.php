
<?php 

    include('connection.php');  
    $name = $_POST['f_name'];  
	 $email = $_POST['f_email'];  

// database insert SQL code
$sql = "Select password from signup where(name = '$name' && email = '$email')";

// insert in database 
$rs = mysqli_query($con,$sql);

	while($row = mysqli_fetch_assoc($rs)){
      $result = $row['password'];
      echo $result;
	}
	
$to_email = "hupadhyay2012@gmail.com";
$subject = "Your Password"; 
$body = "Hi,We just received your forgot  password request. The password for the entered username and email address is:- $result";
$headers = "From: hupadhyay2012@gmail.com";

echo $body;
?>  