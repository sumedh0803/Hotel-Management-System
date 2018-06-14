<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<title>Room Booking</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<style type="text/css">
		.card
		{
			background-color: #FFFFFF;
			padding: 10px;
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
			font-size: 30px;
		}
		.card-content
		{
			margin-top: 10px;
			font-size: 20px;
		}
		table.table
		{
			border:none;
			border-collapse: collapse;			
		}
		table.table tr td
		{
			padding:10px;
		}
		table.table tr th
		{
			padding:10px;
		}
		table.table tr
		{
			border-bottom: 1px solid #BDBDBD;
		}
		table.table tr:hover
		{
			background-color: #D7CCC8;
		}
		input.checkbox
		{
			width:15px;
			height: 15px;
    		font-size: 16px;
		}
		input[type=submit]
		{
    		background-color: #795548;
    		color: #FFF;
    		border: none;
  			outline: none;
		}
		input[type=submit]:hover 
		{
		    background-color: #5D4037;
		    color: #FFF;
		    border: none;
			outline: none;
		  	box-shadow: 3px 4px 4px #888888;
		  	transition: box-shadow 0.2s ease-in-out;
		}
		</style>
</head>
<body>

	<div class="card">
		<div class = "card-heading">Select rooms that have to be checked-out:</div>
		<div class="card-content">
		<?php 
			session_start();
			//if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
			{
		    	$servername = "localhost";
				$pwd =  "";
				$username = "root";
				$conn = mysqli_connect($servername,$username,$pwd,"hotel");
				if(!$conn)
					die();
				else
				{
					$sql = "SELECT * FROM rooms where status = 'occupied'";
					$result = mysqli_query($conn,$sql);
					$rowcount = mysqli_num_rows($result);
					if($rowcount > 0)
					{
						for($i = 0;$i<$rowcount;$i++)
						{
							$row = mysqli_fetch_array($result);
							$rooms[$i] = $row["room_no"];
						}
						$temp = implode("','", $rooms);
						$temp1 = "'".$temp."'";
						$sql = "SELECT * FROM rooms where status = 'occupied'";
						$result = mysqli_query($conn,$sql);
						$rowcount = mysqli_num_rows($result);
							
						$sql1 = "SELECT * FROM customerregistration WHERE roomno IN ($temp1)";
						$result1 = mysqli_query($conn,$sql1);
						$rowcount1 = mysqli_num_rows($result1);
		?>
			<form method = "post" action = "delete.php">
			<center><table border="1px" class = "table">
				<tr>
					<th>Room No</th>
					<th>Room Category</th>
					<th>Occupied By</th>
					<th>Check in</th>
					<th>Check out</th>
					<th></th>
				</tr>
		<?php
						$rowcount = mysqli_num_rows($result);
						if($rowcount>0)
						{
							for($i = 0;$i<$rowcount;$i++)
							{
								$row = mysqli_fetch_array($result);
								$row1 = mysqli_fetch_array($result1);
								echo "<tr>";
								echo ("<td>".$row['room_no']."</td>");
								echo ("<td>".$row['category']."</td>");
								echo ("<td>".$row1['name']."</td>");
								echo ("<td>".$row1['checkin']."</td>");
								echo ("<td>".$row1['checkout']."</td>");
								echo("<td><input type = checkbox class = 'checkbox' name = 'list[]' value = ".$row["room_no"]."></td>");
								echo "</tr>";
							}
							echo ("<tr><td colspan = 6><center><input type = submit value = 'Check-out seleced Rooms'></td></tr>");
						} 
					}
					else
						echo "<center><h2>No rooms are booked</h2></center>";
				}
			}
		?>
			</table></center>
			</form>
		</div>
	</div>
</body>
</html>