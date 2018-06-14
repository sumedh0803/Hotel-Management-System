<?php 

	session_start();

	
	if(isset($_SESSION['username']))
	{
		$user = $_SESSION['username'];
	}
	else
	{
		$message = "YOU NEED TO LOGIN FIRST..!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header( "Refresh:0; url=userlogin.php", true, 303);
	}
 ?>




<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Hotel Paradise - Menu</title>
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/foodMenuCss.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  

</head>

<body>
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="roomBooking.php">Rooms</a></li>
		  <li><a class="active light-primary-color" href="foodmenu.php">Menu</a></li>
		  <li><a href="contactus.php">Contact Us</a></li>
		  <li><a href="userlogin.php">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		  <li style = "float:right"><a href = "signout.php">Sign Out</a></li>
      	  <li style = "float:right"><a href = "cart.php">Cart</a></li>
      	  <li style = "float:right"><a href = "info.php?user=<?php echo $user; ?> ">Hi <?= $user; ?></a></li>
		</ul>
	</div>
	
	<center><h1>Food Menu</h1></center>
	<center><img src="assets/divider.svg" width = 400px></center>
	<div class = "content">

		<?php 
 			require 'connect_db.php';
  			require 'displaymaincoursemenu.php'; // to display the food menu section
		?>

		<div style = " font-family: helvetica;font-size:20px;font-weight:bold;color: #795548">Thank You</div>
	</div>

  
<!-- <div class="content" style="height: 500px; border: 1px solid black;"> -->
			
	<div class = "footer dark-bg" style="border: 1px solid black;">
		<div style="align-content: center;">
			<center><img src="assets/divider-white.svg" width = 400px></center>
			<p>Hotel Paradise<br>
			Cuffe Parade 400012<br>
			© All rights reserved</p>
		</div>
	</div>
  <script src = "js/addtocart.js"></script>
</body>
</html>




 