<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>

		<title>ORDER PAGE</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="order.js"></script>
		
	</head>
	<body>

		<form method="post" action="">
			<fieldset> Place an Order 
				<br><br>

				<input type="text" name="FoodItem" id="FoodName" placeholder="Enter Food Name" required>
				<br><br>

				<input type="number" name="Quantity" id="Quantity" max="10" min="1" placeholder="Enter quantity" required>
				<br><br>

				<button id="BTN" name="OrderBTN" type="submit">PLACE ORDER</button>
			</fieldset>

		</form>

	</body>

	
</html>