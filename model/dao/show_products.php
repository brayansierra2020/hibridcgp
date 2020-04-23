<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/hibridcgp/controller/connection/connection.php";

	$sql = "SELECT * FROM list_products";
	$result= mysqli_query($conn,$sql);

	$root_img ="../../../images/";
	$root_qr ="../../../qrcode/";
		
?>