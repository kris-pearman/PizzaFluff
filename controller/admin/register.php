<?php
$user = $_POST['username'];
$password = $_POST['password'];  
$fname = $_POST['name'];
$sname = $_POST['lastname'];
$addr1 = $_POST['address-line-1'];
$addr2 = $_POST['address-line-2'];
$postcode = $_POST['postcode'];
$phone = $_POST['phone-number'];
$email = $_POST['email'];

include('../db.php');

if(!isset($_SESSION) ) {
    session_start();
}

try{
    // INSERT INTO `pizzafluff`.`customers` (`First_Name`, `Last_Name`, `Address_1`, `Address_2`, `Postcode`, `Phone`, `Email`, `Account_ID`, `Username`, `Password`, `AccessLevel`) VALUES ('Kris', 'Pearman', '456 Made up Avenue', 'Building 5', 'Ng19 3as', '01285812752', 'Kris@pizzafulff.com', '2', 'kris', 'fluff', '1');

$sql = "INSERT `pizzafluff`.`customers` (`First_Name`, `Last_Name`, `Address_1`, `Address_2`, `Postcode`, `Phone`, `Email`, `Username`, `Password`, `AccessLevel`) VALUES (:fname, :sname, :addr1, :addr2, :postcode, :phone, :email, :user, :password, '1');";
$result = $pdo->prepare($sql);
$result->bindparam(":fname", $fname);
$result->bindparam(":sname", $sname);
$result->bindparam(":addr1", $addr1);
$result->bindparam(":addr2", $addr2);
$result->bindparam(":postcode", $postcode);
$result->bindparam(":phone", $phone);
$result->bindparam(":email", $email);
$result->bindparam(":user", $user);
$result->bindparam(":password", $password);
$result->execute();
}

catch (PDOException $e) {
    echo "error" . $e->getMessage();
    exit();
}

echo "Successfully registered";
exit();

 header('Location:../index.php');
?>