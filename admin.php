<?php 

	session_start();

	$admin = '';
	if(!isset($_SESSION['admin_id']))
	{
		header("location:adminlogin.php");
		
	}
	else
	{
		$admin = $_SESSION['admin_username'];
	}

 ?>
<html>
<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Hotel Paradise - Admin</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script type="text/javascript">
		function changecolor(elem) {
			if ( elem.classList.contains('active light-primary-color') )

				elem.classList.toggle('active light-primary-color');
			}
	</script>

</head>

<body>
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="roomBooking.php">Rooms</a></li>
		  <li><a href="foodmenu.php">Menu</a></li>
		  <li><a href="contactus.php">Contact Us</a></li>
		  <li><a href="userlogin.php">Login</a></li>
		  <li><a href="#" class="active light-primary-color" >Admin Panel</a></li>
		  <li style = "float:right"><a href = "signout.php">Sign Out</a></li>
		</ul>
	</div>
	<div class="content" style="border: 0px solid black;">

		<div style = "width:100%;height:500px;border: 0px solid black;clear: both;">
			
			<!--side menu start-->
			<div style = "width:20%;height:100%;float: left;" class = "default-primary-color">
			<table width="100%" id = "nav">
				<tr><td class="vertical" id = "addFood" onclick="changecolor(this)"><a style = " pointer-events: none;cursor: default;" href="addFood">Add Food Items</a></td></tr>
				<tr><td class="vertical" id = "removeFood" onclick="changecolor(this)"><a style = " pointer-events: none;cursor: default;" href="removeFood">Remove Food Items</a></td></tr>
				<tr><td class="vertical" id = "manageRooms" onclick="changecolor(this)"><a style = " pointer-events: none;cursor: default;" href="manageRooms">Manage Rooms</a></td></tr>
			</table>
			</div>
			<!--side menu end-->

			<div style = "width:79%;height:100%;border: 0px solid black;float: right;">
				<div style = "border: 0px solid black">
				<center><h1 style = "color:#000;font-size:32px;">Admin Panel</h1></center>
				<center><img src="assets/divider.svg" width = 400px></center>
				</div>
				<!--content start-->
				<div id="content" style="height: 77%;overflow: auto;"></div>
				<!--content end-->
			</div>

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

	
	
<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/custom.js"></script>
</body>

</html>