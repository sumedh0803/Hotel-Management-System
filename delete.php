<?php
	
	$list[] = $_REQUEST['list'];
	$servername = "localhost";
	$pwd =  "";
	$username = "root";
	$conn = mysqli_connect($servername,$username,$pwd,"hotel");
	if(!$conn)
		die();
	else
	{
		
			foreach ($_REQUEST['list'] as $item)
			{
				$sql = "UPDATE rooms SET status = 'vacant' WHERE room_no = '$item'";
				$result = mysqli_query($conn,$sql);
				if(mysqli_error($conn))
				{
					echo (mysqli_error($conn));
				}
			}
		
	}
	
	header('Refresh:0 ;url=admin.php');