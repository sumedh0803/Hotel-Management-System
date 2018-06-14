<?php 
	
	session_start();
	require 'connect_db.php';
	$msg = "";

	if(isset($_POST['user_name']) && isset($_POST['user_password']))
	{
		$username = $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$sql = "SELECT * FROM customer WHERE username = '$username' AND Password = '$user_password'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$rowcount = mysqli_num_rows($result);

		if($rowcount == 0)
		{
			$msg = "CREDENTIALS DO NOT MATCH..!";
		}
		else
		{
			$_SESSION['user_status'] = 'logged in';
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION["username"] = $row['username'];
			header('Location: index.php');
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Hotel Paradise - Login</title>
		<link rel="icon" type="image/png" href="assets/logo.jpg">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
	    <link rel="stylesheet" type="text/css" href="css/palette.css">
		<link rel="stylesheet" type="text/css" href="css/userlogin.css">
		<script>
  		function disablemsg()
  		{
  			var msg = document.getElementById('msg');
  			msg.style.display = "none";
  		}
  </script> 
		</head>
	<body >
		<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color nav">
		  <li><a href="index.php">Home</a></li>
		  <li><a  href="roomBooking.php">Rooms</a></li>
		  <li><a href="foodmenu.php">Menu</a></li>
		  <li><a href="contactus.php">Contact Us</a></li>
		  <li><a class="active light-primary-color" href="#">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		</ul>
	</div>
	<center>	<img src="assets/divider.svg" vspace = 30px; width="25%"></center>
		<center><div class="card">
 				
		<div class = "card-heading">User Login:</div>
			<div class="card-content">
				
  					<form method = "POST" action="userlogin.php">
  						<center><table cellpadding="10">
  							<tr>
  								<td><label for="uname">Enter Username</label></td>
  								<td><center><input type="text" id="uname" name="user_name"></center></td>
  							</tr>
  							<tr>
  								<td><label for="number">Enter Your Password</label></td>
  							<td><center><input type="password" id="pwd" name="user_password"></center></td>
  							</tr>
  							
  						</table></center>
  						<br>
  					 <center><input type="submit" value="Login"></center>
  					 <center><div id = 'msg' style = "margin:20px auto;font-weight:bold;color:#795548"><?= $msg; ?></div></center>	
   					
                    </form>
                    <br>
                    <center><a href="userregistration.php" style="text-decoration: none;">Still not registered? Register here.</center>
                 
			</div>
		</div>
		<div class = "footer dark-bg" style="border: 1px solid black;">
		<div style="align-content: center;">
			<p>Hotel Paradise<br>
			Cuffe Parade 400012<br>
			© All rights reserved</p>
		</div>
	</div></center>
	</body>

</html>