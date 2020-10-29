<?php
	include_once 'Register.php';
	include_once 'db.php';

	$con = new DBConnector();
	$pdo = $con->connectToDB();

	if(isset($_POST['RegisterBTN'])) // Register
	{
		$Name = $_POST['Fname'];
		$email = $_POST['Email'];
		$Password = $_POST['Pass'];
		$City = $_POST['Address'];
		$Profile = $_FILES['Profilee'];

		$user = new User();  //Object

		$user->setFullName($Name);
		$user->setEmail($email);
		$user->setPassword($Password);
		$user->setAddress($City);
		$user->setProfile($Profile, $pdo);
		

		echo $user->register($pdo);
	}
	elseif (isset($_POST['LoginBTN'])) // Login
	{
		$Email = $_POST['Mail'];
		$Password = $_POST['password'];

		$user = new User();  //Object

		echo $user->setEmail($Email);
		echo $user->setPassword($Password);

		echo $user->login($pdo);
	}
	 elseif (isset($_POST['LogoutBTN'])) // Logout
	 {
		$user = new User();  //Object

		echo $user->logout($pdo);
	}
	
	elseif (isset($_POST['PasswordChange'])) // Change Password
	{
 		$Pass1 = $_POST['passwordnew'];
		$Pass2 = $_POST['passwordnewC'];

		$user = new User();  //Object

		echo $user->setNewPass($Pass1);
		echo $user->setConfirmedPass($Pass2);

		echo $user->changePassword($pdo);
	}
?>