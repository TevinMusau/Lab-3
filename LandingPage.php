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
					$stmt = $pdo->prepare("SELECT Name FROM usertable WHERE Email = ?"); 
					$stmt->execute([$_SESSION['Email']]);
					$row1 = $stmt->fetch();

					$sql4 = $pdo->prepare("SELECT Password FROM usertable WHERE Email = ?");
					$sql4->execute([$_SESSION['Email']]);
					$row4 = $sql4->fetch();

					$sql5 = $pdo->prepare("SELECT Address FROM usertable WHERE Email = ?");
					$sql5->execute([$_SESSION['Email']]);
					$row5 = $sql5->fetch();

					$sql6 = $pdo->prepare("SELECT ProfilePhoto FROM usertable WHERE Email = ?");
					$sql6->execute([$_SESSION['Email']]);
					$row6 = $sql6->fetch();

					echo "<p id='Welcome' title='This is you'> Welcome user ". $_SESSION['Email']."</p>";
					echo "<br>";
					echo "<p id='Details'> Your details are as below: </p>";
					

					echo "<p id='Mail'> Email: ".$_SESSION['Email']."</p>";
					

					if($row1 !== null)
					{
						echo "<p id='Name'>Name: ".$row1['Name']."</p>";
						echo "<img id='profile' src='Images/profile".$_SESSION['Email'].".jpg'>";
						
					}
					if($row4 !== null)
					{
						echo "<p id='Pass'>Password: ".$row4['Password']."</p>";
						
					}
					if($row5 !== null)
					{
						echo "<p id='Address'>Address: ".$row5['Address']."</p>";
					}

					echo "<br><br>";
					echo "<form action = 'index.php' method='POST'>";
					echo "<p id = 'Pchange'> Click <a href='ChangePassword.php' name='Change' id='ChangePass'> here </a> to change your password </p>";
					echo "<button name='LogoutBTN' id='Logout'> Logout </button> ";
					echo "</form>";
				}
				?>
		</div>
	</body>
</html>