<!DOCTYPE html>
<html lang="en">
	<head>
  <title>Hotel Paradise - Register</title>
		<link rel="icon" type="image/png" href="assets/logo.jpg">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
	    <link rel="stylesheet" type="text/css" href="css/palette.css">
      <link rel="stylesheet" type="text/css" href="css/userregistration.css">
		<style type="text/css">
		
		</style>
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
		  <li><a href="contactus.php">Contact Us</a></li>
		  <li><a class="active light-primary-color" href="userlogin.php">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		</ul>
	</div>
	<center>	<img src="assets/divider.svg" vspace = 30px; width="25%"></center>
		<center><div class="card">
 				
		<div class = "card-heading">Personal Details:</div>
			<div class="card-content">
				
  					<form action="register.php" method="POST">
  						<center><table cellpadding="10">
  							<tr>
  								<td><label for="name">Enter your Name</label></td>
  							</tr>
  							<tr>
  								<td><input type="text" id="fname" name="firstname" placeholder="Your first name.."></td>
  								<td><input type="text" id="mname" name="middlename" placeholder="Your middle name.."></td>
  								<td> <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br></td>
  							</tr>
  							<tr></tr>
  							<tr>
  								<td> <label for="number">Age</label></td>
  								<td><input type="number" id="age" name="age" min = '1'></td>

  							</tr>
  							<tr>
  								<td><label for="DOB">Date Of Birth</label></td>
  								<td><input type="Date" id="Date" name="DOB" ></td>
  							</tr>
  							<tr></tr>
  							<tr>
  								<td><label for="number">Address</label></td>
                                <td> <textarea id="address" name="address" style = "resize: none;"></textarea></td>
                            </tr>
                            <tr></tr>
  							<tr>
  								<td> <label for="number">Contact Number</label></td>
                                <td><input type="number" id="cn" name="cn"></td>
                                

                            </tr>
                            <tr>
                            	<td><label for="uname">Username:</label></td>
                            	<td><input type="text" id="uname" name="username" placeholder="eg:manish1234,etc"></td>
                            </tr>
                             <tr>
                            	<td><label for="uname">Password</label></td>
                            	<td><input type="password" id="pwd" name="pwd" ></td>
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
			Cuffe Parade 400012<br>
			© All rights reserved</p>
		</div>
	</div></center>
	</body>

</html>