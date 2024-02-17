<html>
<head>
<title>
SHELBY CINEMAS - BOOKING
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
	<div style="color: rgb(236,240,241); text-align: center; font-size: 20px; ">
	<p>REGISTERED SUCCESSFULLY</p>
</div>
	<div class="form">
		<form method="post" action="gbooking_process.php">
			<p>LOG IN</p>
		<input style="color: rgb(236,240,241);" type="text" placeholder="UserId" id="name" name="username" require><br>
		<input style="color: rgb(236,240,241);" type="password" placeholder="Password" id="name" name="password" required><br>
		<input style="margin-bottom: 10px;" type="submit" value="submit" id="button"><br>
		<a style="font-size: 15px; color: white;" href="gbooking2.php">Don't have an account?</a>
	</form>
	</div>
</body>
</html>