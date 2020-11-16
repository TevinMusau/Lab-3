<?php
	session_start();
	include_once 'Register.php';
	include_once 'db.php';
	include_once 'index.php';

	$con = new DBConnector();
	$pdo = $con->connectToDB();

	echo "<form action = 'index.php' method='POST'>";
	echo "<p id = 'Pchange'> Click <a href='ChangePassword.php' name='Change' id='ChangePass'> here </a> to change your password </p>";
	echo "</form>";
?>