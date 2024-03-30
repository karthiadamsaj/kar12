<?php

include "../includes/dbconnect.php";
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Assuming your form has fields like 'Name', 'dluser_email', 'dluser_password', 'dluser_conpassword', etc.
        $username = $_POST['dluser_name'];
        $dluser_email = $_POST['dluser_email'];
        $dluser_password = md5($_POST['dluser_password']);

        // Check if all required form fields are set
        if (!empty($username) && !empty($dluser_email) && !empty($dluser_password)) {
            // Prepare and execute an INSERT statement
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $dluser_email); // Use $dluser_email instead of undefined $email
            $stmt->bindParam(':password', $dluser_password);

            $stmt->execute();

            // Registration successful message
            header('location:dashboard.php');
        } else {
            echo "All form fields are required.";
        }
    }
?>
