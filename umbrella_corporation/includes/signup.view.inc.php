<?php

    declare(strict_types=1);

    function signup_inputs() {

        if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
            echo '<label for="username">Username: </label><br>
            <input type="text" name="username" id="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '"><br>';
        } else {
            echo '<label for="username">Username: </label><br>
            <input type="text" name="username" id="username" placeholder="Username"><br>';
        }

        echo '<label for="password">Password: </label><br>    
        <input type="password" name="password" id="password"><br>';
        
        if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["username_taken"]) && !isset($_SESSION["errors_signup"]["invalid_email"])){
            echo '<label for="email">Email: </label><br>    
            <input type="email" name="email" id="email" value="' . $_SESSION["signup_data"]["email"] . '"><br>';
        } else {
            echo '<label for="email">Email: </label><br>    
            <input type="email" name="email" id="email"><br>';
        }
    }

    function check_signup_errors() {
        if(isset($_SESSION['errors_signup'])) {
            $errors = $_SESSION['errors_signup'];

            echo '<br>';
            
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }

            unset($_SESSION['errors_signup']);
        }else if (isset($_GET["signup"]) && $_GET["signup"] === "success")  {
            echo '<br>';
            echo "<p>Signup success!</p>"; 
        }
    }