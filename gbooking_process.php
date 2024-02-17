<?php
$servername = "localhost";
$username = 'root';
$password = '';
$db='login';

$conn = new mysqli ($servername,$username,$password,$db);

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "SELECT * FROM loginform WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password){
	echo "<script>location.replace('gbookingticket.php')</script>";
}
else{
	echo "<script>alert('check your credentils')</script>";
	echo "<script>location.replace('gbooking.php')</script>";
}

?>