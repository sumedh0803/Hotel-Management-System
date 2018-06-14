<?php 

	
 ?>


<html>
<head>
	<link rel="icon" type="image/png" href="assets/logo.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/room.css">
	<style type="text/css">
	th
	{
		font-size: 22px;
	}
	td
	{
		font-size: 20px;
		padding: 1%;
text-align: center;
	}
		.card
		{
			background-color: #FFFFFF;
			padding: 15px;
			box-shadow: 2px 1px 5px #888888;
			border-radius: 3px;
			margin-top: 5px;
			width: 60%;
			text-align: left;
			margin-bottom:  2%;
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
	</style>
</head>

<body>
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="index.php">Home</a></li>
		  <li><a  href="roomBooking.php">Rooms</a></li>
		  <li><a href="foodmenu.php">Menu</a></li>
		  <li><a href="contactus.php">Contact Us</a></li>
		  <li><a href="userlogin.php">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		  <li style="float:right"><a href = "signout.php">Sign Out</a></li>
		  <li style="float:right"><a href = "#" class="active light-primary-color">Hi <?php echo $_GET['user']; ?></a></li>
		</ul>
	</div>
	<div class="content" style="">

		<center>	<img src="assets/divider.svg" width="25%" vspace = "20px"></center>
		<center><div class = "card">
			<div class = "card-heading">Your Transactions:</div>
			<div class = "card-content">
				<?php 
			
			{
				$user = $_REQUEST['user'];
	    		$servername = "localhost";
				$pwd =  "";
				$username = "root";
				$conn = mysqli_connect($servername,$username,$pwd,"hotel");
				if(!$conn)
					die();
				else
				{
					$sql = "SELECT * FROM customerregistration WHERE username = '$user'";
					$result = mysqli_query($conn,$sql);
					echo ("<center><table border = 0px>");
					echo "<tr>
					<th>Date Of Transaction </th>
					<th>Time Of Transaction</th>
					<th>Type Of Transaction</th>
					<th>Total amount of Transaction</th></tr>";
					$rowcount = mysqli_num_rows($result);
					if ($rowcount > 0) 
					{
						
						for($i = 1;$i<=$rowcount;$i++)
						{
							$row = mysqli_fetch_array($result);

							echo("<tr>");
							echo("<td>".$row["date_of_txn"]."</td>"); 
							echo("<td>".$row["time_of_txn"]."</td>"); 
							echo("<td>".$row["type_of_txn"]." </td>"); 
							echo("<td>".$row["tot_amt"]."</td>"); 
							;
							echo("</tr>");
							
						}
						
					} 
					echo "</table></center>";
				}
			}
					
			//else 
			{
	    		//header('Location:login.php');
			}
		?>

			</div>
		</div></center>
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