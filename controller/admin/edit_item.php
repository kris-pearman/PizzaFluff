<?php

if(!isset($_SESSION) ) {
     session_start();
 }

$productID = $_POST['productID']; //gets a value from whatever was filled in
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];  
$productDesc = $_POST['productDesc'];
$productType = $_POST['productType'];
$productImage = $_POST['productImage'];
$product = [];

$product['ID'] = $productID;
$product['Name'] = $productName;
$product['Price'] = $productPrice;
$product['Desc'] = $productDesc;
$product['Type'] = $productType;
$product['Image'] = $productImage;



header('Location:../../edit_item_screen.php');
?>