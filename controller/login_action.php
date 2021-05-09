<?php
$thisuser = $_POST['username']; //gets a value from whatever was filled in
$thispass = $_POST['password']; //can use md5 to use hashed passwords

include('db.php');

if(!isset($_SESSION) ) {
    session_start();
}

try{

$sql = "SELECT * FROM pizzafluff.customers WHERE Username = :username and Password = :userpass";
$result = $pdo->prepare($sql);
$result->bindparam(":username", $thisuser);
$result->bindparam(":userpass", $thispass);
$result->execute();
}

catch (PDOException $e) {
    echo "error" . $e->getMessage();
    exit();
}



while ($row = $result->fetch()) {
    $customer[] = array(
        'CustomerID' => $row['Customer_ID'],
        'FirstName' => $row['First_Name'],
        'LastName' => $row['Last_Name'],
        'Addr1' => $row['Address_1'],
        'Addr2' => $row['Address_2'],
        'Postcode' => $row['Postcode'],
        'Phone' => $row['Phone'],
        'Email' => $row['Email'],
        'Username' => $row['Username'],
        'Password' => $row['Password'],
        'Access' => $row['AccessLevel']
    );

    $_SESSION['Customer'] = $customer;

}

foreach($customer as $option) {
        echo $option['Username'], '<br>';
        $_SESSION['Username'] = $option['Username'];
        $_SESSION['Access'] = $option['Access'];
        $_SESSION['UserID'] = $option['CustomerID'];
    }

// $num = $result->fetch(PDO::FETCH_ASSOC); THIS ALWAYS RETURNS 0 NOT SURE WHY.
    
//     if($num > 0){
//       echo "Success";
//       exit();
//     }
//     echo("fail");
//     exit();


//temporary, check customer is set. 
    if (isset($customer)) {
        echo $_SESSION['Username'];
        echo "Success";
    } 

 header('Location:../index.php');
?>