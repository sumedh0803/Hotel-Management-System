<?php 


  echo "<div class = 'menu_body'>";
  $i = 0;

  echo "<div class='menu_section'>";
  echo "<h2 class = 'menu_section_title' name = 'menu_section_title'>STARTERS</h2>";
  
  $sql = "SELECT * FROM foodmenu WHERE menu_section = 'starters'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result)) 
    { 
        echo "<button class = 'atc-btn' onclick = added('".$i."','starters') >ADD</button>";
        echo "<div class = 'menu_item' name ='menu_item'>";
        echo "<div class = 'menu_item_name' name = 'menu_item_name'>".$row["menu_item"]."</div>";
        echo "<div class = 'menu_item_price' name = 'menu_item_price'>".$row['menu_item_price']."</div>";
        echo "<div class = 'menu_item_description' name = 'menu_item_description'>".$row['menu_desc']."</div>";
        echo "<div class = 'addmain' name = 'addmain' style = 'float:left;'><b></b></div>";        
        echo "</div>";
        $i++;
    }   
  }
  else 
  {
    echo "0 results";
  }
  echo "</div>";

  echo "<div class='menu_section'>";
  echo "<h2 class = 'menu_section_title' name = 'menu_section_title'>MAIN COURSE</h2>";

  $sql = "SELECT * FROM foodmenu WHERE menu_section = 'main-course'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result)) 
    { 
        echo "<button class = 'atc-btn' onclick = added('".$i."','main-course') >ADD</button>";
        echo "<div class = 'menu_item' name ='menu_item'>";
        echo "<div class = 'menu_item_name' name = 'menu_item_name'>".$row["menu_item"]."</div>";
        echo "<div class = 'menu_item_price' name = 'menu_item_price'>".$row['menu_item_price']."</div>";
        echo "<div class = 'menu_item_description' name = 'menu_item_description'>".$row['menu_desc']."</div>";
        echo "<div class = 'addmain' name = 'addmain' style = 'float:left;'><b></b></div>";        
        echo "</div>";
        $i++;
    }   
  }
  else 
  {
    echo "0 results";
  }
  echo "</div>";

  echo "<div class='menu_section'>";
  echo "<h2 class = 'menu_section_title' name = 'menu_section_title'>DRINKS</h2>";

  $sql = "SELECT * FROM foodmenu WHERE menu_section = 'drinks'";
  $result = mysqli_query($conn, $sql); 
  if (mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "<button class = 'atc-btn' onclick = added('".$i."','drinks') >ADD</button>";
        echo "<div class = 'menu_item' name ='menu_item'>";
        echo "<div class = 'menu_item_name' name = 'menu_item_name'>".$row["menu_item"]."</div>";
        echo "<div class = 'menu_item_price' name = 'menu_item_price'>".$row['menu_item_price']."</div>";
        echo "<div class = 'menu_item_description' name = 'menu_item_description'>".$row['menu_desc']."</div>";
        echo "<div class = 'addmain' name = 'addmain'  style = 'float:left;'><b></b></div>";        
        echo "</div>";
        $i++;
    }   
  }
  else 
  {
    echo "0 results";
  }

  echo "</div>";

  echo "<div class='menu_section'>";
  echo "<h2 class = 'menu_section_title' name = 'menu_section_title'>DESSERTS</h2>";

  $sql = "SELECT * FROM foodmenu WHERE menu_section = 'desserts'";
  $result = mysqli_query($conn, $sql); 
  if (mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "<button class = 'atc-btn' onclick = added('".$i."','desserts') >ADD</button>";
        echo "<div class = 'menu_item' name ='menu_item'>";
        echo "<div class = 'menu_item_name' name = 'menu_item_name'>".$row["menu_item"]."</div>";
        echo "<div class = 'menu_item_price' name = 'menu_item_price'>".$row['menu_item_price']."</div>";
        echo "<div class = 'menu_item_description' name = 'menu_item_description'>".$row['menu_desc']."</div>";
        echo "<div class = 'addmain' name = 'addmain'  style = 'float:left;'><b></b></div>";        
        echo "</div>";
        $i++;
    }   
  }
  else 
  {
    echo "0 results";
  }

  echo "</div>";
  echo "</div>";

  mysqli_close($conn);

 ?>