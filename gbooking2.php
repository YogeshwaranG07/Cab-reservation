<html>
<head>
<title>
GATSBY CINEMAS - BOOKING
</title>
<link rel="stylesheet" type="text/css" href="gbooking.css">
</head>

<body>
	<div class="header">
		<ul>
			<li><a href="ghome.php">HOME</a></li>
			<li><a href="gabout.php">ABOUT</a></li>
			<li><a href="#">BOOKING</a></li>
			<li><a href="gcontact.php">CONTACT</a></li>
		</ul>
	</div>
	<div class="form">
		<form method="post" action="gbooking2_process.php">
			<p>SIGN UP</p>
		<input style="color: rgb(236,240,241);" type="text" placeholder="UserId" id="name" name="username" required><br>
		<input style="color: rgb(236,240,241);" type="password" placeholder="Password" id="name" name="password" required><br>
		<input style="color: rgb(236,240,241);" type="password" name="repassword" placeholder="Confirm password" id="name" required><br>
		<input style="color: rgb(236,240,241);" type="email" name="email" placeholder="email" id="name" required><br>
		<input style="margin-bottom: 10px;" type="submit" value="submit" id="button" name="signup"><br>
		<a style="font-size: 15px; color: white; margin-top: 10px;" href="gbooking.php">Already have an account?</a>
	</form>
	</div>
</body>
</html>