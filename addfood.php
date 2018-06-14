<?php 



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="icon" type="image/png" href="assets/logo.jpg">
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/addfood.css">
 </head>
 <body>
 	<div class = "card" style = "height: 93%">
 		<div class = "card-heading">Add new Dishes to the Menu:</div>
 		<div class = "addfoodform">
 		<form name = "addfood" method = "POST" action = "addtomenu.php">
 			<center><table border = 0 cellpadding="10">
 				<tr>
 					<td>
 						<div class = "text">SELECT CATEGORY:</div>
 					</td>
 					<td>
 						<select name = 'menu_section' style = "width:200px;">
 							<option disabled selected>Select Category</option>
 							<option value = "starters">Starters</option>
  							<option value = "main-course">Main Course</option>
  							<option value = "drinks">Drinks</option>
  							<option value = "desserts">Desserts</option>
						</select>
					</td>
				</tr>
					<td>
						<div class = "text">ENTER NAME OF THE DISH</div>
					</td>
					<td>
						<input class = "fields" type="text" name="menu_item">
					</td>
				</tr>
				<tr>
					<td>
						<div class = "text">ENTER THE PRICE</div>
					</td>
					<td>
						<input class = "fields" type="number" name="menu_item_price" min = "1">
					</td>					
				</tr>
				<tr>
					<td>
						<div class = "text">ENTER THE DESCRIPTION</div>
					</td>
					<td>
						<textarea name = "menu_desc" rows = 10 placeholder="Description"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan = 2 style = "text-align:center"><input style = "" type="submit" value = "SUBMIT" name="" onclick = ""></td>
				</tr>
			</table></center>
 		</form>
 		</div>
 	</div>
 </body>
 </html>