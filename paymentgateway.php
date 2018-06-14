<?php session_start(); ?>
<html>

<head>
 <title>Hotel Paradise - Payment</title>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<script type="text/javascript">
		function myFunction(elem) {
			var debit = document.getElementById('debit');
			if(elem.value == "cash")
			{
				debit.style.display = "none";
				//style.backgroundColor: #795548;
			}
			else
			{
				debit.style.display = "block";
				//document.getElementById("submit").style.backgroundColor: #795548;
			}
			
		}
		function begin()
		{
			document.getElementById("submit").disabled = false;
		}

	</script>
	<style type="text/css">
		.debit
		{
			background-image: url("assets/debit.jpg");
			width: 500px;
			height: 250px;
			border-radius: 5px;
			border : 1px solid black ;
			margin-left: 60px;
			margin-top: 20px;
		}
		.card-data
		{
			position: relative;
			top: 50px;
			font-size: 20px;
			width: 80%;
			height: 15%;
			margin-top: 10px;
			margin-left:50px;
		}
		.card-date
		{
			position: relative;top: 50px;
			width: 19%;
			height: 15%;
			font-size: 20px;
			margin-top: 10px;
			margin-right: 3px;
			margin-left:50px;
		}
		.radio
		{
			padding: 40px;
			width: 20px;
			height: 20px;
			font-size: 20px;
		}
		.card
		{
			background-color: #FFFFFF;
			padding: 15px;
			box-shadow: 2px 1px 5px #888888;
			border-radius: 3px;
			margin-top: 5px;
			alignment-baseline: central;

		}
		input[type=submit]
		{
    		background-color: #795548;
    		color: #FFF;
    		border: none;
			outline: none;
			width: 30%;
			height: 8%; 
			margin-top: 30px;
		}
		input[type=submit]:hover {
		    background-color: #5D4037;
		    color: #FFF;
		    border: none;
			outline: none;
			box-shadow: 3px 4px 4px #888888;
			transition: box-shadow 0.2s ease-in-out;
		}
		.payment{
			width: 50%;
			text-align: left;
		}
		.card:hover
		{
			box-shadow: 4px 5px 5px #888888;
		}
		.card-heading
		{
			border-bottom: 2px solid #BDBDBD;
			margin-top: 10px;
			font-size: 30px;
		}
		.card-content
		{
			margin-top: 10px;
			font-size: 20px;
		}
	</style>


</head>

<body onload="begin()">
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="roomBooking.php">Rooms</a></li>
		  <li><a href="foodmenu.php">Menu</a></li>
		  <li><a href="#">Contact Us</a></li>
		  <li><a href="adminlogin.php">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		</ul>
	</div>
	<div class="content" style="">

		<center>	<img src="assets/divider.svg" width="25%" vspace = 20px;></center>
		<center><div class = "card payment">
			<div class="card-heading">Select a Payment Method:</div>
			<div class = "card-content">
				<form name = "f1" method = "POST" action = "confirmfoodorder.php">
				 <input type="radio" name="payment" value="cash" id = "radio" class = "radio" onclick="myFunction(this)"><span class = "caption">Cash</span><br>
  				 <input type="radio" name="payment" value="aard" id = "radio" class = "radio" onclick="myFunction(this)"><span class = "caption">Card</span><br>
  				 <div class = "debit" id = "debit" style="display: none">
  				 	<input class = "card-data" type="number" placeholder="Card Number" name="number" maxlength="16" style="" /><br>
  				 	<input class = "card-data" type="text" placeholder="Name" name="name" maxlength="16"/><br>
  				 	<input class = "card-date" type="number" placeholder="MM" name="month" maxlength="2"/> 
  				 	<input class = "card-date" type="number" placeholder="YY" name="year" length="2"/>
  				 	<input class = "card-date" type="password" placeholder="CVV" name="cvv" maxlength="3"/><br>
  				 	
  				 	
  				 </div>
  				 <center><input type="submit" id="submit" value="Place Order"></center>
  				 <?php
  				 	require 'connect_db.php';
  				 	$user = $_SESSION['username'];
  				 	$sql = "SELECT * FROM customerregistration where username = '$user'";
  				 	$result = mysqli_query($conn,$sql);
  				 	$rowcount = mysqli_num_rows($result);
  				 	
  				 	for($i = 1 ; $i <= $rowcount; $i++)
  				 	{
  				 		if($i == $rowcount)
  				 		{
  				 			$row = mysqli_fetch_array($result);
  				 			echo "<tr><input name = 'name' type = 'hidden' value = '".$row["name"]."'>";
  				 			echo "<input name = 'date' type = 'hidden' value = '".$row["date_of_txn"]."'>";
  				 			echo "<input name = 'time' type = 'hidden' value = '".$row["time_of_txn"]."'>";
  				 			echo "<input name = 'type' type = 'hidden' value = '".$row["type_of_txn"]."'>";
  				 			echo "<input name = 'tot' type = 'hidden' value = '".$row["tot_amt"]."'></tr>";
  				 		}
  				 		else{
  				 			$row = mysqli_fetch_array($result);
  				 		}
  				 	}

  				 	?>
  				</form>


			</div>

		</div></center>
		
?>
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


