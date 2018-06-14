<!DOCTYPE html>
 <html>
 <head>
  <link rel="icon" type="image/png" href="assets/logo.jpg">
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/removefood.css">
	<style type="text/css">
	.card
    {
      background-color: #FFFFFF;
      padding: 10px;
      height: 93%;
      box-shadow: 2px 1px 5px #888888;
      border-radius: 3px;
      margin-top: 5px;
      overflow: auto;
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
 	<div class = "card" >
		<div class = "card-heading">Remove food from Menu:</div>
		
			<center>
				<form name = "removefood" method = "POST" action = "removefrommenu.php">
				<table cellpadding="10">
				<tr>
					<th class = 'tfields'>MENU SECTION</th>
					<th class = 'tfields'>MENU ITEM</th>
					<th class = 'tfields'>MENU ITEM PRICE</th>
					<th class = 'tfields'>MENU DESCRIPTION</th>
					<th class = 'tfields'></th>
				</tr>
				<?php 
					require 'connect_db.php';
					$sql = "SELECT * FROM foodmenu ORDER BY menu_section";
  					$result = mysqli_query($conn, $sql);
  					if(mysqli_num_rows($result) > 0)
  					{
    					while($row = mysqli_fetch_assoc($result))
    					{
    						echo "<tr>";
    						echo "<td class = 'tfields'>".$row['menu_section']."</td>";
    						echo "<td class = 'tfields'>".$row['menu_item']."</td>";
    						echo "<td class = 'tfields'>".$row['menu_item_price']."</td>";
    						echo "<td class = 'tfields'>".$row['menu_desc']."</td>";
    						echo "<td><input name = 'checklist[]' type = 'checkbox' value = ".$row['item_id']."></td>";
    						echo "</tr>";
    					}
    				}
    				mysqli_close($conn);
		 		?>
		 		<tr>
		 			<td colspan = 5 style = "text-align:center"><input type="submit" value = "SUBMIT" name=""></td>
		 		</tr>
				</table>
				</form>
			</center>
	</div>
 </body>
 </html>