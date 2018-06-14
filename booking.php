<?php session_start(); ?>
<html>

<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
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
		
<?php
$salutation = $_REQUEST['salutation'];
$fname = $_REQUEST['fname'];
$mname = $_REQUEST['mname'];
$lname = $_REQUEST['lname'];

$in = $_REQUEST['in'];
$out = $_REQUEST['out'];
$roomno = $_REQUEST['roomno'];
$user = $_SESSION["username"];
$gtotal = $_REQUEST['gtotal'];
$type = $_REQUEST['typeOFBooking'];


	$servername = "localhost";
	$pwd =  "";
	$username = "root";
	$conn = mysqli_connect($servername,$username,$pwd,"hotel");
	if(!$conn)
		die();
	else
	{
		$name = $salutation." ".$fname." ".$mname." ".$lname;
		date_default_timezone_set('Asia/Kolkata');
		$date = date("d-m-Y");
		$time = date("h:i:sa");
		//var_dump($date);
		//var_dump($time);
		//var_dump($gtotal);
		$sql = "INSERT INTO customerregistration (username,name, date_of_txn, time_of_txn, type_of_txn,checkin,checkout,roomno,tot_amt) VALUES ('$user','$name','$date','$time','$type','$in','$out','$roomno',$gtotal)";
		$result = mysqli_query($conn,$sql);
		if(mysqli_connect_error())
		{
			echo "error";
		}
		else
		{
			echo ("<center><h1>Booking successful! Please wait while we redirect you to the payment gateway.</h1><img src = 'assets/Gear.gif' width = 50px height= 50px vspace = 10px></center>");

			
		}
		$sql1 = "UPDATE rooms SET status = 'occupied' WHERE room_no = $roomno";
		$result = mysqli_query($conn,$sql1);
		if(mysqli_connect_error())
		{
			//echo "error";
		}
		else
		{
			//echo ("Booking successful! Please wait while we redirect you to the payment gateway.");
			
		}

		header("Refresh: 3 ,url= paymentgateway.php");

	}

?>
</div>
	</div>
	<div class = "footer dark-bg" style="border: 1px solid black;">
		<div style="align-content: center;">
			<center><img src="assets/divider-white.svg" width = 400px></center>
			<p>Hotel Paradise<br>
			some address<br>
			© All rights reserved</p>
		</div>
	</div>
</body>
</html>


