<?php 

	require 'connect_db.php';

	if(!empty($_POST['checklist']))
	{
		foreach($_POST['checklist'] as $selected)
		{
			echo $selected. " ";
			settype($selected, "integer");
			$sql = "DELETE FROM foodmenu WHERE item_id = $selected" ;
			$result = mysqli_query($conn,$sql);	
		}
	}

	mysqli_close($conn);

	header( "refresh:0; url=admin.php" );

 ?>