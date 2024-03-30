<?php

$servername = "localhost";
$username = "root";
$password = "";



try{
    $conn = new PDO("mysql:host=$servername;dbname=mywebsite-karthi", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "connection succesfully";
}
catch (PDOException $e){
    echo "connection failed: ". $e->getMessage();
}

?>
