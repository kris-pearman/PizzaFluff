<?php
$thisuser = $_POST['username']; //gets a value from whatever was filled in
$thispass = $_POST['password']; //can use md5 to use hashed passwords

include('db.php');

if(!isset($_SESSION) ) {
    session_start();
}

try{

$sql = "SELECT Username, Password FROM accounts WHERE Username = :username and Password = :userpass";
$result = $pdo->prepare($sql);
$result->bindparam(":username", $thisuser);
$result->bindparam(":userpass", $thispass);
$result->execute();
}

catch (PDOException $e) {
    echo "error" . $e->getMessage();
}

$num = $result->fetch(PDO::FETCH_ASSOC);
    if($num > 0){
        $_SESSION["username"] = $thisuser;   
    }

    

header('Location:../index.php');
?>