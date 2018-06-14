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
</head>

<body>
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="index.php">Home</a></li>
		  <li><a class="active light-primary-color" href="#">Rooms</a></li>
		  <li><a href="foodmenu.php">Menu</a></li>
		  <li><a href="contactus.php">Contact Us</a></li>
		  <li><a href="userlogin.php">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		  <li style="float:right"><a href = "signout.php">Sign Out</a></li>
		  <li style="float:right"><a href = "info.php?user=<?php echo $username; ?>">Hi <?= $username; ?></a></li>
		</ul>
	</div>
	<div class="content" style="">
		<h1 style ="color:#000;text-align:center;">Click on a Room of your choice to proceed to booking</h1>
		<center><img src="assets/divider.svg" width = 400px><br><br><br></center>
		<?php 
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
					$sql = "SELECT * FROM rooms";
					$result = mysqli_query($conn,$sql);
					echo ("<center><table border = 0px>");
					echo "<tr hidden = true><td></td><td></td><td></td><td></td></tr><tr>";
					$rowcount = mysqli_num_rows($result);
					if ($rowcount > 0) 
					{
						
						for($i = 1;$i<=$rowcount;$i++)
						{
							$row = mysqli_fetch_array($result);

							if($row["status"] == "vacant")
								echo("<td class = 'room vacant'><a href = 'confirmation.php?room_no=".$row["room_no"]."'><div style = 'font-family: Dancing Script, cursive;'>");
							else
								echo("<td style = 'font-family: Dancing Script, cursive;' class = 'room occupied'>");
							echo("Room No.: ".$row["room_no"]."<br>"); 
							echo("Room Type: ".$row["category"]."<br>"); 
							echo("Capacity: ".$row["capacity"]." adults<br>"); 
							echo("Rate per night: INR ".$row["rate"]."<br>"); 
							echo("Rate for extra person: INR ".$row["extra person"]."<br>"); 
							echo("Status: ".$row["status"]);
							echo("</div></a></td>");
							if($i == 4 || $i == 8)
								echo ("</tr><tr>");	
						}
						
					} 
					echo "</table></center>";
				}
			}
					
			//else 
			{
	    		//header('Location:login.php');
			}
		?></div>
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