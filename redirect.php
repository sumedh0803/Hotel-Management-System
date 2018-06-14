<?php

	session_start();
	$name = $_SESSION['username'];
	$type = $_REQUEST['typeOFBooking'];
	$tot = $_REQUEST['totamt'];
	var_dump($tot);
	$user = $_SESSION["username"];
	date_default_timezone_set('Asia/Kolkata');
	$date = date("d-m-Y");
	$time = date("h:i:sa");
	require 'connect_db.php';
	$sql = "INSERT INTO customerregistration (username, name, date_of_txn, time_of_txn, type_of_txn,tot_amt) VALUES ('$user','$name','$date','$time','$type',$tot)";
		$result = mysqli_query($conn,$sql);
		if(mysqli_connect_error())
		{
			echo "error";
		}
	header("Refresh: 3 ,url= paymentgateway.php");

 ?>	

<html>
<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	 <title>Hotel Paradise</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/room.css">
</head>

<body>
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="#">Home</a></li>
		  <li><a class="active light-primary-color" href="roomBooking.php">Rooms</a></li>
		  <li><a href="#">Menu</a></li>
		  <li><a href="#">Contact Us</a></li>
		  <li><a href="#">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		</ul>
	</div>
	<div class="content" style="border: 1px solid black;">

		<center><br><Br><img src="assets/divider.svg" width="25%"><br><br></center>
	<center><h1>Booking successful! Please wait while we redirect you to the payment gateway.</h1><img src = 'assets/Gear.gif' width = 50px height= 50px vspace = 10px></center>

	</div>
	</div>
	<div class = "footer dark-bg" style="border: 1px solid black;">
		<div style="align-content: center;">
			<center><img src="assets/divider-white.svg" width = 400px></center>
			<p>Hotel Paradise<br>
			Cuffe Parade 400012<br>
			© All rights reserved</p>
		</div>
	</div>
</body>
</html>
	
	

