<?php

    require 'config.php';

    if(!empty($_SESSION['id'])){
        header('Location: index.php');
    }

    if(isset($_POST['submit'])){

        $name = htmlspecialchars($_POST['name']);
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);
        $duplicate = mysqli_query($conn, "SELECT * FROM login_register WHERE username = '$username' OR email = '$email'");

        if(mysqli_num_rows($duplicate) > 0){
            echo 
                "<script> alert('Username or Email Taken')</script>";
        }else {
            if($password == $confirm_password){
                $query = "INSERT INTO login_register VALUES('', '$name', '$username', '$email', '$password')";
                mysqli_query($conn, $query);
                echo '<script>alert("Registration Successful")</script>';
                header('Location: login.php');
            }else {
                echo '<script> alert("Password does not match")</script>';
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="" required> <br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="" required> <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="" required> <br>

        <label for="password">Password:</label>
        <input type="text" name="password" id="password" value="" required> <br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="text" name="confirm_password" id="confirm_password" value="" required> <br>

        <button type="submit" name="submit">Register</button>
    </form>

    <br>
    <a href="login.php">Login</a>
</body>
</html>