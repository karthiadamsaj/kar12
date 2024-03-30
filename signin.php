<?php
include 'includes/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Mahesh Group of Instition</h1>
    <h2>Log in</h2>
    <div class="container">
        <form method="POST" action="ajax/signin_ajax.php">
            <label for="Uname">Email Id</label><br>
            <input type="email" id="email" name="dluser_email"><br>
            <label for="Password">Password</label><br>
            <input type="password" id="Password" name="dluser_password"><br><br>
            <button type="submit">Sign in</button><br><br>
            <input type="button" value="forget Password">
            <h4>Do you have an account? Signup</h4>
        </form>
    </div>
    
    
</body>
</html>