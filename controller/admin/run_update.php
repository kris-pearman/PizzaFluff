<?php

if(!isset($_SESSION) ) {
     session_start();
 }

 include('../db.php');

$productID = $_POST['id']; //gets a value from whatever was filled in
$productName = $_POST['product-name'];
$productPrice = $_POST['product-price'];  
$productDesc = $_POST['description'];
$productType = $_POST['type'];
$productImage = $_POST['image'];


 if (isset($_POST['update'])) {
    # update-button was clicked
    try{

    
        $sql = "UPDATE `pizzafluff`.`menu_items` SET `Name` = :name, `Price` = :price, `Description` = :description, `Type` = :type, `Image` = :image WHERE (`Menu_Items_ID` = :id)";
        $result = $pdo->prepare($sql);
        $result->bindparam(":name", $productName);
        $result->bindparam(":price", $productPrice);
        $result->bindparam(":description", $productDesc);
        $result->bindparam(":type", $productType);
        $result->bindparam(":image", $productImage);
        $result->bindparam(":id", $productID);
        $result->execute();
        
        }
        
        catch (PDOException $e) {
            echo "error" . $e->getMessage();
            $_SESSION['$ercode'] = "errorcode";
            exit();
        }
        
        
        
        echo "Query Complete";
    
        exit();
    
}
elseif (isset($_POST['delete'])) {
    # Save-button was clicked
    // DELETE FROM `pizzafluff`.`menu_items` WHERE (`Menu_Items_ID` = '8');
    try {
    
    $sql = "DELETE FROM `pizzafluff`.`menu_items` WHERE (`Menu_Items_ID` = :id)";
    $result = $pdo->prepare($sql);
    $result->bindparam(":id", $productID);
    $result->execute();

    }

    catch (PDOException $e) {
        echo "error" . $e->getMessage();
        $_SESSION['$ercode'] = "errorcode";
        exit();
    }
    
    echo "Query Complete";

    exit();
}



// header('Location:../edit_item_screen.php');



    // $sql = "SELECT Username, Password FROM accounts WHERE Username = :username and Password = :userpass";
    //SAMPLE QUERY UPDATE `pizzafluff`.`menu_items` SET `Name` = '12 Cod Bites', `Price` = '2.50', `Description` = '12 Individual Battered Cod Bites.' WHERE (`Menu_Items_ID` = '9');


?>