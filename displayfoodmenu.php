<?php 

	$sql = "SELECT * FROM foodmenu ORDER BY menu_section";
  	$result = mysqli_query($conn, $sql);
  	if(mysqli_num_rows($result) > 0)
  	{
    	while($row = mysqli_fetch_assoc($result))
    	{
    		echo "<tr>";
    		echo "<td>".$row['menu_section']."</td>";
    		echo "<td>".$row['menu_item']."</td>";
    		echo "<td>".$row['menu_item_price']."</td>";
    		echo "<td>".$row['menu_desc']."</td>";
    		echo "<td><input name = 'checklist[]' type = 'checkbox' value = ".$row['item_id']."></td>";
    		echo "</tr>";
    	}
    }

    mysqli_close($conn);

 ?>