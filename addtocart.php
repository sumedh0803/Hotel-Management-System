<?php 

	session_start();
	$user = $_SESSION["username"];

	$menu_section = $_REQUEST["menu_section"];
	$menu_item = $_REQUEST["menu_item"];
	$menu_item_price = $_REQUEST['menu_item_price'];
	$menu_desc = $_REQUEST['menu_desc'];
	
	require 'connect_db.php';

	$sql = "SELECT * FROM cart WHERE menu_item = '$menu_item' AND user_id = '$user'";

	$result = mysqli_query($conn,$sql);
	$rowcount = mysqli_num_rows($result);
	echo($rowcount." ");

	if($rowcount == 0)
	{
		$sql = "INSERT INTO cart (user_id,menu_section,menu_item,menu_item_price,menu_desc,quantity) VALUES ('$user','$menu_section','$menu_item',$menu_item_price,'$menu_desc',1)";
	}
	else
	{
		$row = mysqli_fetch_array($result);
		$new_quantity = $row['quantity'] + 1;
		echo ($new_quantity);
		$sql = "UPDATE cart SET quantity = $new_quantity WHERE menu_item = '$menu_item'";
	}

	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);
 ?>