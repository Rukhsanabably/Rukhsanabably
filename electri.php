<?php

	$SerialId = $_POST['SerialId'];
	$SellerName = $_POST['SellerName'];
	$SellerId = $_POST['SellerId'];
	$ProductName = $_POST['ProductName'];
	$ProductModel = $_POST['ProductModel'];
	$Branch = $_POST['Branch'];
	$CustomerName = $_POST['CustomerName'];
	$CustomerLocation = $_POST['CustomerLocation'];
	$CellNo = $_POST['CellNo'];
	$WholeSalePrice = $_POST['WholeSalePrice'];

	$conn = mysqli_connect('localhost', 'root', '', 'electronic store form');

	$sql = "INSERT INTO `electronic store form` (Serial ID, Seller Name, Seller ID, Product Name, Product Model, Branch, Customer Name, Customer Location, Cell No, Price) 
	VALUES ('{$SerialId}', '{$SellerName}', '{$SellerId}', '{$ProductName}', '{$ProductModel}', '{$Branch}', '{$CustomerName}', '{$CustomerLocation}', '{$CellNo}', '{$WholeSalePrice}')";

	$stmt = mysqli_query($conn, $sql);


	if($stmt)
	{
		echo "Connection Succssfull";
	}


?>