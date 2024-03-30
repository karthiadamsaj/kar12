<?php
session_start();
include "includes/dbconnect.php";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dluser_email = $_POST['dluser_email'];
        $dluser_password = $_POST['dluser_password'];
        if (!empty($dluser_email) && !empty($dluser_password)) {

            $signquery="SELECT `id`,`username`,`email` FROM `users` WHERE `email`='$dluser_email'";

            foreach($conn->query($signquery) as $row){
                $userid = $row['id'];
                $username = $row['username'];
                $useremail = $row['email'];
            }
            $_SESSION['userid'] = $userid;



        

            // Registration successful message
            echo "Registration successful";
            header('location:dashboard.php');
        
        } else {
            echo "All form fields are required.";
        }
    }

?>

