<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "hotel";

	$conn = mysqli_connect($servername, $username, $password);

	if(!$conn) 
      die("Connection failed: " . mysqli_connect_error());

	mysqli_select_db($conn,$database);
?>
