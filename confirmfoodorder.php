<?php 
$name = $_REQUEST['name'];
$date = $_REQUEST['date'];
$time = $_REQUEST['time'];
$type = $_REQUEST['type'];
$tot = $_REQUEST['tot'];
require 'fpdf/fpdf.php';
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",25);
$pdf->cell(0,15,"Hotel Paradise",0,1,'C');

$pdf->SetFont("Arial","B",15);
$pdf->cell(0,5,"Cuffe Parade 400012",0,1,'C');

$pdf->cell(0,5,"-----------------------------------------------------------------------------------------------------------",0,1,'C');

$pdf->SetFont("Arial","B",15);
$pdf->cell(15,5,"Name: {$name}",0,0,'L');
$pdf->cell(15,5,"                                                                                     Date: {$date}",0,1,'L');
$pdf->cell(15,5,"Time: {$time}",0,1,'L');
//$pdf->cell(15,5,"Mode of Transaction: {$type}",0,0,'L');

$pdf->cell(15,5,"Type: {$type}",0,1,'L');
$pdf->cell(15,5,"Total Amount: {$tot}",0,1,'L');
$pdf->Multicell(0,5,"\n\n\n\n\n\n\n\n                                                                                                               Sign",0,1,false,'R');
$pdf->output();


 ?>
 <html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/palette.css">
	<link rel="stylesheet" type="text/css" href="css/paymentgateway.css">
 <body>
	<div class = "header">
		<div class = "heading">Hotel Paradise</div>
	</div>
	<div>
		<ul class="default-primary-color">
		  <li><a href="#">Home</a></li>
		  <li><a href="roomBooking.php">Rooms</a></li>
		  <li><a href="foodmenu.php">Menu</a></li>
		  <li><a href="#">Contact Us</a></li>
		  <li><a href="adminlogin.php">Login</a></li>
		  <li><a href="admin.php">Admin Panel</a></li>
		</ul>
	</div>