<?php 

	require 'connect_db.php';

	$menu_section = $_POST["menu_section"];
	$menu_item = $_POST["menu_item"];
	$menu_item_price = $_POST['menu_item_price'];
	$menu_desc = $_POST['menu_desc'];

	$sql = "INSERT INTO foodmenu (menu_section,menu_item,menu_item_price,menu_desc) VALUES ('$menu_section','$menu_item',$menu_item_price,'$menu_desc')";

	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

	header( 'Location: admin.php' ); 
 ?>

<!-- 
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="icon" type="image/png" href="assets/logo.jpg">
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" type="text/css" href="palette.css">
	<link rel="stylesheet" type="text/css" href="addfood.css">
 </head>
 <body>
 	<center>
 		<h2>DISH ADDED IN THE MENU SUCCESSFULLY..!</h2>
 	</center>
 </body>
 </html>

 -->