
<?php 
    include('connection.php');  
    $name = $_POST['name'];  
	 $email = $_POST['email'];  
    $phone = $_POST['phone']; 
    $password = $_POST['password'];  

		
// database insert SQL code
$sql = "INSERT INTO signup VALUES ('$name', '$email', '$phone', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Signed Up Successfully";
}

else
{
	echo "Are you a genuine visitor?";
	
}?>  