<?php

if(!isset($_SESSION) ) {
     session_start();
 }

 include('../db.php');

$name = $_POST['name']; //gets a value from whatever was filled in
$addr_1 = $_POST['address-line-1'];
$addr_2 = $_POST['address-line-2'];  
$postcode = $_POST['postcode'];
$phone = $_POST['phone-number'];
$email = $_POST['email'];


 if (isset($_POST['register'])) {
    # update-button was clicked
    try{

    
        $sql = "UPDATE `pizzafluff`.`menu_items` SET `Name` = :name, `Price` = :price, `Description` = :description, `Type` = :type, `Image` = :image WHERE (`Menu_Items_ID` = :id)";
        $result = $pdo->prepare($sql);
        $result->bindparam(":name", $name);
        $result->bindparam(":addr1", $addr_1);
        $result->bindparam(":addr2", $addr_2);
        $result->bindparam(":postcode", $postcode);
        $result->bindparam(":phone", $phone);
        $result->bindparam(":email", $email);
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