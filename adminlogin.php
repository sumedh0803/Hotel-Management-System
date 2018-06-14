<?php 
	
	session_start();
	require 'connect_db.php';
	$msg = "";

	if(isset($_POST['admin_username']) && isset($_POST['admin_password']))
	{
		$admin_username = $_POST['admin_username'];
		$admin_password = $_POST['admin_password'];
		$sql = "SELECT * FROM admin WHERE admin_username = '$admin_username' AND admin_password = '$admin_password'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$rowcount = mysqli_num_rows($result);

		if($rowcount == 0)
		{
			$msg = "CREDENTIALS DO NOT MATCH..!";
		}
		else
		{
			$_SESSION['admin_status'] = 'logged in';
			$_SESSION['admin_id'] = $row['admin_id'];
			$_SESSION['admin_username'] = $row['admin_username'];
			header('Location: admin.php');
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<title>Admin Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/adminlogin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  	function disablemsg()
  	{
  		var msg = document.getElementById('msg');
  		msg.style.display = "none";
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
		  <li><a href="admin.php">Admin Panel</a></li>
		</ul>
	</div>
<center><h1>Admin Login</h1><center>
		<center>	<img src="assets/divider.svg" width="25%"><br><br></center>
	<div class = "content">
		
		<form name = "adminlogin" action = "adminlogin.php" method = "POST">
		<center><table cellpadding="10">
			<tr>
				<td>
					ENTER ADMIN-NAME
				</td>
				<td>
					<input type = "text" onfocus="disablemsg()" name = "admin_username" placeholder = "USERNAME">
				</td>
			</tr>
			<tr>
				<td>
					ENTER PASSWORD
				</td>
				<td>
					<input type = "password" name = "admin_password" placeholder="PASSWORD">
				</td>
			</tr>
			<tr>
				<td colspan = 2><input type = "submit" id = "submit" value = "SUBMIT">
			</tr>
		</table>
		<div id = 'msg'><?= $msg; ?></div>
	</center>
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