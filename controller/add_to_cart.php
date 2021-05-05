<?php

if(!isset($_SESSION) ) {
     session_start();
 }

$productID = $_POST['productID']; //gets a value from whatever was filled in
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];  
$product = [];

$product['ID'] = $productID;
$product['Name'] = $productName;
$product['Price'] = $productPrice;
$_SESSION['basket'][] = $product;

foreach($_SESSION['basket'] as $items) :
     echo $items['ID'];
     echo $items['Name'];
     echo $items['Price'];
endforeach;

echo session_id();
header('Location:../basket.php');
?>