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
<html>
<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Hotel Paradise - Rooms</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/room.css">
	<style type="text/css">
		td
		{
			padding: 10px;
			font-size: 16px;
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
		.card:hover
		{
			box-shadow: 4px 5px 5px #888888;
		}
		.card-heading
		{
			border-bottom: 2px solid #BDBDBD;
			margin-top: 10px;
			font-size: 28px;
		}
		.card-content
		{
			margin-top: 10px;
			font-size: 18px;
		}
		.room-pic
		{
			width : 100%;
			height: 27.5%;
			border: 0px solid black;
			margin-bottom: 10px;
		}
	</style>
	<script src = "js/confirmation.js"></script>
</head>

<body onload = "addimage()">
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="index.php">Home</a></li>
		  <li><a class="active light-primary-color" href="roomBooking.php">Rooms</a></li>
		  <li><a href="foodmenu.php">Menu</a></li>
		  <li><a href="#">Contact Us</a></li>
		  <li><a href="adminlogin.php">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		  <li style="float:right"><a href = "signout.php">Sign Out</a></li>
		  <li style="float:right"><a href = "info.php?user=<?php echo $username; ?>"">Hi <?= $username; ?></a></li>
		</ul>
	</div>
	<div class="content" style=";padding: 20px;">
		<center><h1>Verify your details: </h1>
		<img src="assets/divider.svg" width = 400px></center>
		<div style = "border:0px solid black;height: 1000px;">
			<div style = "width:50%;float:left;border:0px solid white;margin-left:120px;left:50px;margin-top:10px;">
				<form name = "f1" method = "post" action = "booking.php">
					<div class="card">
						<div class = "card-heading">Personal Information:</div>
						<div class="card-content">
							Name:<br>
							<img src="assets/people.svg" hspace="10px""><select name = "salutation">
								<option selected>Mr.</option>
								<option >Ms.</option>
								<option >Mrs.</option>
								<option >Dr.</option>
							</select>
							<input type="text" name="fname" placeholder="First Name" required class="long"> 
							<input type="text" name="mname" placeholder="Middle Name">
							<input type="text" name="lname" placeholder="Last Name">
						</div>
						<div class="card-content">
						Email Address:<br><img src="assets/email.svg" hspace="10px""><input type="Email" name="email" required>
						</div>
						<div class="card-content">
						Contact:<br><img src="assets/phone.svg" hspace="10px""><input type="number" name="contact" minlength="10" maxlength="10">
						</div>
					</div>
					<div class="card">
						<div class = "card-heading">Guest Information:</div>
						<div class="card-content">
							Number of adults: <br>
							<img src="assets/adults.svg" hspace="10px""><select onblur="calcguest()" id = "adults" name = "adults">
								<option selected value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<div class="card-content">
							Number of children: <br>
							<img src="assets/children.svg" hspace="10px""><select onblur="calcguest()" id = "children" name = "children">
								<option selected value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<div class="card-content">
							ID Proof<br>
							<img src="assets/id.svg" hspace="10px">
							<select style = "width: 200px;" name = "idtype">
								<option selected>Aaadhar Card</option>
								<option>Govt. issued ID</option>
								<option>PAN Card</option>
								<option>Passport</option>
							</select>
						</div>
						<div class="card-content">
							ID Serial Number<br><img src="assets/id.svg" hspace="10px""><input type="number" name="idproof" required>
						</div>
					</div>
					<div class="card">
						<div class = "card-heading">Booking Information:</div>
						<div class="card-content">
							Check-in:<br><img src="assets/date.svg" hspace="10px""><input type="date" name="in" id = "in" onblur ="calcdays()" required>
						</div>
						<div class="card-content">
							Check-out:<br><img src="assets/date.svg" hspace="10px""><input type="date" name="out" id = "out" onblur ="calcdays()" required>
						</div>
						<div class="card-content">
							Total Days:<br><img src="assets/date.svg" hspace="10px""><input type="number" name="days" id = "days" readonly="true">
						</div>
					</div>
				
			</div>
			<div style = "width:30%;margin:10px;float:left;border:0px solid black">
				<?php 
					$roomno = $_REQUEST['room_no'];
					$servername = "localhost";
					$pwd =  "";
					$username = "root";
					$conn = mysqli_connect($servername,$username,$pwd,"hotel");
					if(!$conn)
						die();
					else
					{
						$sql = "SELECT * FROM rooms where room_no = ".$roomno;
						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);
					}
				?>
				<div class="card">
							
							<div class="card-content">
							<div class = "room-pic" id = "roompic"></div>
							Room No.:<br>
								<img src="assets/room.svg" hspace="10px""><input type="number" name="roomno" readonly value = "<?php echo $row['room_no']; ?>">
							</div>

							<div class="card-content">
								Category:<br><img src="assets/rating.svg" hspace="10px"><input type="text" name="category" id = "category" readonly value = "<?php echo $row['category']; ?>">
							</div>
							<div class="card-content">
								Total Guests: <br><img src="assets/adults.svg" hspace="10px"><input type="number" name="tot_guests" id="tot_guests" readonly value = "">
							</div>
							<div class="card-content">
								Rate per night: <br><img src="assets/money.png" hspace="10px""><input type="number" name="rate" id="rate" readonly value = "<?php echo $row['rate']; ?>">
							</div>
							<div class="card-content">
								Net Total: <br><img src="assets/money.png" hspace="10px""><input type="number" name="net" id="net" readonly value = "">
							</div>

							<input type="hidden" id="extracharge" value = "<?php echo $row['extra person']?>">
							<input type="hidden" name="typeOFBooking" value = "Room Booking">
							
							<div class="card-content">
								Extra Guest Surcharge: <br><img src="assets/money.png" hspace="10px""><input type="number" name="guest_extra" id = "guest_extra" readonly value = "">
							</div>
							<div class="card-content">
								GST: <br><img src="assets/money.png" hspace="10px""><input type="number" name="gst" id="gst" readonly value = "">
							</div>
							<div class="card-content">
								Grand Total: <br><img src="assets/money.png" hspace="10px""><input type="number" name="gtotal" id="gtotal" readonly value = "">
							</div>
							<div class="card-content">
								<input type="submit" value = "Book Now!">
							</div>
				</div>
			</div></center>
		</div>
		</form>
	</div>	
	<div class = "footer dark-bg" style="border: 1px solid black;">
		<center><img src="assets/divider-white.svg" width = 400px></center>
		<center><p>Hotel Paradise<br>
			Cuffe Parade 400012<br>
			© All rights reserved</p></center>	
		
	</div>
</body>

</html>