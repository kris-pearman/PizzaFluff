<?php

try {
    include('dbconn.php');
    // set sql_mode="";
    //declare pdo object called pdo to store connection parameters and handle connection process
    $pdo = new PDO('mysql:host=localhost;dbname='.$dbName , $Username , $Password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');

    //connection testing
      // if($pdo){
      //     echo "connection successful";
      //   }
      //   else {
      //      echo "something screwed up";
      //   }
      //  exit();
}
catch (PDOException $e){
    $output = 'unable to connect to the databse server:' . $e->getMessage();

    echo $output;

    exit();
}



?>