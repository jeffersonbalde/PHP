<?php

    if(isset($_POST['submit'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $result = mysqli_query($conn, "SELECT * FROM login_register WHERE username = '$username'");

        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username"> <br>

        <label for="password">Password: </label>
        <input type="text" name="password" id="password"> <br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <br>
    <a href="registration.php">Register</a>
</body>
</html>