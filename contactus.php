<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hotel Paradise - Contact Us</title>
		<link rel="icon" type="image/png" href="assets/logo.jpg">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
	    <link rel="stylesheet" type="text/css" href="css/palette.css">
		<link rel="stylesheet" type="text/css" href="css/contactus.css">
		</head>
	<body >
		<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color nav">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="roomBooking.php">Rooms</a></li>
		  <li><a href="foodmenu.php">Menu</a></li>
		  <li><a class="active light-primary-color" href="contactus.php">Contact Us</a></li>
		  <li><a href="userlogin.php">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		</ul>
	</div>
	<center><h1>We constantly need your feedbacks so we can improvise and provide way better services in future!</h1>
	<img src="assets/divider.svg" width="25%"><br><br></center>
		<center><div class="card">
 				
		
			<div style = '' class="card-content">
				
  					<form  action="addfeedback.php" method="POST">
  						<center><table cellpadding="10">
  							<tr>
  								<td><input type="text" id="fname" name="firstname" placeholder="Your first name.."></td>
  								<td><input type="text" id="mname" name="middlename" placeholder="Your middle name.."></td>
  								<td> <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br></td>
  							</tr>
  							<tr></tr>
                  <tr>
                  <td><label for="text">Email: </label></td>
                                <td> <input type="text" name="email" id="address"></td>
                            </tr>
                            <tr></tr>
  							<tr>
  								<td> <label for="text">Feedback:</label></td>
                  <td><textarea id="fb" name="fb" ></textarea></td>
                </tr>
                           
  						</table></center>
  					 <center><input type="submit" value="Submit"></center>	
   					
                    </form>
                 
			</div>
		</div>
		                   
		<div class = "footer dark-bg" style="border: 1px solid black;">
		<div style="align-content: center;">
		<img src="assets/divider-white.svg">
			<p>Hotel Paradise<br>
			Cuffe Paarade 400012<br>
			© All rights reserved</p>
		</div>
	</div></center>
	</body>

</html>