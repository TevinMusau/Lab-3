<?php
	session_start();

	include_once 'Register.php';
	include_once 'db.php';
	include_once 'index.php';

	$con = new DBConnector();
	$pdo = $con->connectToDB();
?>

<!DOCTYPE html>
<html>
	<head>
		<title> LandingPage </title>
		<link rel="stylesheet" type="text/css" href="LandingPage.css">
	</head>

	<body>
		<div class="Box1">
			<h1 id="Title"> Welcome to this Page </h1>
			<?php
				if(!isset($_SESSION['Email']))
				{?>
					<a href="Login.php" id="LoginLink"> Click to Login </a>
					<?php
				}
				else
				{
					echo "<p id='Welcome' title='This is you'> Welcome user ". $_SESSION['Email']."</p>";
					echo "<br>";

					echo "<a href='details.php' id='yourDetails'> Your Details </a>";
					echo "<a href='order.php' id='Order'> Order Here </a>";
					echo "<a href='ChangePassword.php' id='PasswordChange'> Change your Password </a>";
					echo "<form action='index.php' method='POST'>";
					echo "<button name='LogoutBTN' id='Logout'> Logout </button> ";
					echo "</form>";					
				}
				?>
		</div>
	</body>
</html>