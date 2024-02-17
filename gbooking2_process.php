<?php
$servername = "localhost";
$username = 'root';
$password = '';
$db='login';

$conn = new mysqli ($servername,$username,$password,$db);

if(isset($_POST['signup'])){
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$rpass=$_POST['repassword'];
	$email=$_POST['email'];

	if($pass==$rpass){
		$query= "INSERT INTO loginform (username,password) VALUES ('$name','$pass')";
	    if(mysqli_query($conn,$query)){
		      echo "You have registered successfully";
		      echo "<script>location.replace('gbooking2_gbooking.php')</script>";
	    }
	}
	else{
	echo "<script>alert('type in the correct password')</script>";
	echo "<script>location.replace('gbooking2.php')</script>";
    }
}

?>