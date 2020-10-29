<!DOCTYPE html>
<html>
	<head>
		<title> REGISTER </title>
		<link rel="stylesheet" type="text/css" href="UserRegister.css">
	</head>

	<body>
		<form method="Post" action="index.php" class="RegForm" enctype="multipart/form-data">
			<h3 id="FieldTitle"> Register </h3>
			<input type="text" name="Fname" id="Fname" placeholder="Enter First Name">
			<br><br><br>

			<input type="email" name="Email" id="Email" placeholder="Enter Email Address">
			<br><br><br>

			<input type="password" name="Pass" id="Pass" placeholder="Enter Password">
			<br><br><br>

			<input type="text" name="Address" id="Address" placeholder="Enter City of Residence">
			<br><br><br>

			<input type="file" name="Profilee" id="Profile" required="true">
			<br><br><br>

			<input type="submit" name="RegisterBTN" value="Register" id="Register">
		</form>
	</body>
</html>