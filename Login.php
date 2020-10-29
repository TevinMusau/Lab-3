<!DOCTYPE html>
<html>
	<head>
		<title> LOGIN </title>
		<link rel="stylesheet" type="text/css" href="Login.css">
	</head>

	<body>
		<form action="index.php" method="POST" class="LoginForm">
			<h3 id="FieldTitle"> Login </h3>
			<input type="email" name="Mail" id="Mail" placeholder="Enter Email Address">
			<br><br><br>

			<input type="password" name="password" id="password" placeholder="Enter Password">
			<br><br><br>

			<input type="submit" name="LoginBTN" id="Login" value="Login">
			<br><br>

			<a href="UserReg.php" id="RegLink"> Create an account? </a>
		</form>
	</body>
</html>