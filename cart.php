<?php 

	session_start();

	
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
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
	 <title>Hotel Paradise - Cart</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<style type="text/css">
	</style>
 </head>
 <body onload = "total()">
 
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
		  <li style = "float:right"><a href = "signout.php">Sign Out</a></li>
      	  <li style = "float:right"><a href = "info.php">Hi <?= $username ?></a></li>
          <li class="active light-primary-color" style = "float:right"><a href ="cart.php">Cart</a></li>
		</ul>
	</div>
		<center><h1>Cart</h1><center>
		<center><img src="assets/divider.svg" width="25%"><br><br></center>
		
		
		<center>
		<div class = "maincontent">
			<center>
				<form id = "cartform" method = "POST" action = "redirect.php">
				<table cellpadding="10">
				<tr>
					<th>
						MENU ITEM
					</th>
					<th>
						MENU DESCRIPTION
					</th>
					<th>
						MENU ITEM PRICE
					</th>
					<th>
						QUANTITY
					</th>
					<th>
						TOTAL
					</th>
					<th>
					</th>
				</tr>
				<?php 
					require 'displaycart.php';	
		 		?>
		 		<tr>
		 		<tr>
		 			<td></td>
		 			<td></td>
		 			<td></td>
		 			<td></td>
		 			<td id = "grandtotal" style = "border-top:1px dotted #795548"></td>
		 			<td></td>
		 		</tr>
		 			<td colspan = 6 style = "text-align:center">
		 			<input type="hidden" name="typeOFBooking" value = "Food Order">
		 			<input type="hidden" name="totamt" id = "totamt">
		 				<input type = "submit" value = "SUBMIT" name="">
		 				<input type = "submit" value = "REMOVE" formaction = "removefromcart.php">
		 			</td>
		 		</tr>
				</table>
				</form>
			</center>
	</div>
	</center>

	<div class = "footer dark-bg" style="border: 1px solid black;">
		<div style="align-content: center;">
			<center><img src="assets/divider-white.svg" width = 400px></center>
			<p>Hotel Paradise<br>
			Cuffe Parade 400012<br>
			© All rights reserved</p>
		</div>
	</div>

<script type="text/javascript">

document.onload = function(){total()};	

function total()
{
	var menu_item_price = document.getElementsByName('menu_item_price');
	var quantity = document.getElementsByName('quantity');
	var total = document.getElementsByName('total');
	var tot = document.getElementById('totamt');
	var grandtotal = document.getElementById('grandtotal');
	var sum = 0;

	for(var i=0;i < menu_item_price.length; i++ )
	{
		total[i].innerHTML = parseInt(menu_item_price[i].innerHTML) * parseInt(quantity[i].innerHTML);
	}

	for(var i = 0; i < total.length;i++)
	{
		sum = sum + parseInt(total[i].innerHTML);
	}
	grandtotal.innerHTML = sum;

	tot.value = sum;
	
	
		
} 
</script>
 </body>
 </html>