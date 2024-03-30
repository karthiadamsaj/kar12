<?php
error_reporting(E_ALL);
include "includes/dbconnect.php";
session_start();
$userids = $_SESSION['userid'];
$userquery="SELECT `id`,`username`,`email` FROM `users` WHERE `id`='$userids'";
foreach($conn->query($userquery) as $rows){
    $username = $rows['username'];
}




?>
<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
    <body>
    <div class="container">
        <h1>Welcome to<?php echo $username; ?> institution</h1>
    </div>
    <button><a href="signout.php">signout</a></button>
    </body>
</head>
</html>