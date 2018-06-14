<html>
<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" type="text/css" href="palette.css">
	<link rel="stylesheet" type="text/css" href="room.css">
	<style type="text/css">
		td
		{
			padding: 10px;
			font-size: 16px;
		}
		.card
		{
			background-color: #FFFFFF;
			padding: 10px;
			box-shadow: 2px 1px 5px #888888;
			border-radius: 3px;
			margin-top: 5px;
		}
		.card:hover
		{
			box-shadow: 4px 5px 5px #888888;
		}
		.card-heading
		{
			border-bottom: 2px solid #BDBDBD;
			margin-top: 10px;
		}
		.card-content
		{
			margin-top: 10px;
		}
		

	</style>
	<script type="text/javascript">
		function calcdays()
		{
			var indate = new Date(document.getElementById('in').value);
			var outdate = new Date(document.getElementById('out').value);
			var days = document.getElementById('days');
			days.value = parseInt((outdate - indate) / (24 * 3600 * 1000));
		}
	</script>
</head>

<body>
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="#">Home</a></li>
		  <li><a class="active light-primary-color" href="#">Rooms</a></li>
		  <li><a href="#">Menu</a></li>
		  <li><a href="#">Contact Us</a></li>
		  <li><a href="#">Login</a></li>
		  <li><a href="#">Admin Panel</a></li>
		</ul>
	</div>
	<div class="content" style="border: 1px solid black; margin: 0px auto;">
		<h3>Verify your details: </h3>
		<div style = "border:1px solid black">
			
			<div style = "width :55%;border:1px solid black">

				
						<form name = "f1" method = "post" action = "payment.php">
						<div class="card">
							<div class = "card-heading">Personal Information:</div>
							<div class="card-content">
								Name:<br>
									<select name = "salutation">
									<option selected>Mr.</option>
									<option >Mrs.</option>
									<option >Dr.</option>
								</select>
								<input type="text" name="fname" placeholder="First Name" class="long"> 
								<input type="text" name="mname" placeholder="Middle Name">
								<input type="text" name="lname" placeholder="Last Name">
							</div>

							<div class="card-content">
								Email Address:<br><input type="Email" name="Email">
							</div>
							<div class="card-content">
								Contact:<br><input type="number" name="contact">
							</div>
						</div>
						<div class="card">
							<div class = "card-heading">Guest Information:</div>
							<div class="card-content">
								Number of adults: <br>
								<select>
									<option selected>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<div class="card-content">
								Number of children: <br>
								<select>
									<option selected>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<div class="card-content">
								ID Proof<br>
								<select>
									<option selected>Aaadhar Card</option>
									<option>Govt. issued ID</option>
									<option>PAN Card</option>
									<option>Passport</option>
								</select>
							</div>
							<div class="card-content">
								ID Serial Number<br><input type="number" name="idproof">
							</div>
						</div>
						<div class="card">
							<div class = "card-heading">Booking Information:</div>
							<div class="card-content">
								Check-in:<br><input type="date" name="in" id = "in"  onblur ="calcdays()">
							</div>
							<div class="card-content">
								Check-out:<br><input type="date" name="out" id = "out"  onblur ="calcdays()">
							</div>
							<div class="card-content">
								Total Days:<br><input type="number" name="days" id = "days" readonly="true">
							</div>
						</div>
						</form>
					
			</div>
			<div style = "width :40%;float:right;border:1px solid black">
				<?php 
					$roomno = $_REQUEST['room_no'];
					$servername = "localhost";
					$pwd =  "";
					$username = "root";
					$conn = mysqli_connect($servername,$username,$pwd,"food");
					if(!$conn)
						die();
					else
					{
						$sql = "SELECT * FROM rooms where room_no = ".$roomno;
						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);
					}
				?>
				<table>
					<tr>
						<td>Room no.: </td>
						<td><input type="number" name="roomno" readonly value = "<?php echo $row['room_no']; ?>"></td>
					</tr>
					<tr>
						<td>Category: </td>
						<td><input type="text" name="category" readonly value = "<?php echo $row['category']; ?>"></td>
					</tr>
					<tr>
						<td>Total Guests: </td>
						<td><input type="number" name="tot_guests" readonly value = ""></td>
					</tr>
					<tr>
						<td>Rate per night</td>
						<td><input type="number" name="rate" readonly value = "<?php echo $row['rate']; ?>"></td>
					</tr>
					<tr>
						<td>Net Total: </td>
						<td><input type="number" name="rate" readonly value = ""</td>
					</tr>
					<tr>
						<td>Extra Guest Surcharge: </td>
						<td><input type="number" name="guest_extra" readonly value = ""></td>
					</tr>
					<tr>
						<td>GST</td>
						<td><input type="number" name="gst" readonly value = ""></td>
					</tr>
					<tr>
						<td>Grand Total</td>
						<td><input type="number" name="gtotal" readonly value = ""></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" caption = "Proceed to Payment"></td>
					</tr>


				</table>

			</div>
		</div>
		
		
	<footer>
	
			<p>Hotel Paradise<br>
			some address<br>
			© All rights reserved</p>
		</div>
	</div>
	</footer>

	
	

</body>

</html>