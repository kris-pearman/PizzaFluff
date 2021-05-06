<?php
// TODO, SET CUSTOMER VARIABLE TO WHATEVER LOGGED CUSTOMER ID IS, SET ORDERNUMBER ID TO WHATEVER IS GENERATED. WIPE BASKET CLEAN AFTER CONFIRMED.


$thiscustomer = "1";
$thisordernumber = "12347";


include('db.php');

if(!isset($_SESSION) ) {
    session_start();
}
$_SESSION['$ercode'] = "";

try{

$sql = "SELECT Username, Password FROM accounts WHERE Username = :username and Password = :userpass";
$sql = "INSERT INTO `pizzafluff`.`customer_orders` (`Customer_ID`,`Order_Item_ID`) VALUES (:customerID, :order_item_ID)";
$result = $pdo->prepare($sql);
$result->bindparam(":customerID", $thiscustomer);
$result->bindparam(":order_item_ID", $thisordernumber);
$result->execute();


foreach ($_SESSION['basket'] as $items) :
    $thisitem = $items['ID'];
$sql = "INSERT INTO `pizzafluff`.`order_items` (`Order_Item_ID`, `Menu_Items_ID`, `Quantity`) VALUES (:order_item_ID, :this_item, '1')";
$result = $pdo->prepare($sql);
$result->bindparam(":this_item", $thisitem);
$result->bindparam(":order_item_ID", $thisordernumber);
$result->execute();
endforeach;
}

catch (PDOException $e) {
    echo "error" . $e->getMessage();
    $_SESSION['$ercode'] = "errorcode";
    header('Location:../basket.php');
    exit();
}



    

echo "Order Confirmed";

unset($_SESSION['basket']);
exit();
?>

<!-- INSERT INTO `pizzafluff`.`customer_orders` (`Customer_ID`, `Order_Item_ID`) VALUES ('1', '12345'); -->
<!-- INSERT INTO `pizzafluff`.`order_items` (`Order_Item_ID`, `Menu_Items_ID`, `Quantity`) VALUES ('12345', '1', '1'); -->

