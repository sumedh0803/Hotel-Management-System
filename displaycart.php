<?php // 
    
    require 'connect_db.php';
    $user = $_SESSION["username"];
    
	$sql = "SELECT * FROM cart WHERE user_id = '$user' ORDER BY menu_section";
  	$result = mysqli_query($conn, $sql);
  	if(mysqli_num_rows($result) > 0)
  	{
    	while($row = mysqli_fetch_assoc($result))
    	{
    		echo "<tr>";
    		echo "<td style = 'border-right:1px dotted #795548' class = ''>".$row['menu_item']."</td>";
            echo "<td style = 'border-right:1px dotted #795548'>".$row['menu_desc']."</td>";
    		echo "<td style = 'border-right:1px dotted #795548' class = 'menu_item_price' name = 'menu_item_price'>".$row['menu_item_price']."</td>";
            echo "<td style = 'border-right:1px dotted #795548' class = 'quantity' name = 'quantity'>".$row['quantity']."</td>";
            echo "<td  class = 'total' name = 'total'></td>";
    		echo "<td><input name = 'checklist[]' type = 'checkbox' value = ".$row['item_id']."></td>";
    		echo "</tr>";
    	}
    }

    mysqli_close($conn);

 ?>