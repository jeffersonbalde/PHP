<?php

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        try{

            require_once 'dbh.inc.php';
            require_once 'signup.model.inc.php';
            require_once 'signup.contr.inc.php';

            // ERROR HANDLERS
            $errors = [];

             if(is_input_empty($username, $password, $email)) {
                $errors["empty_input"] = "Fill in all fields!";
             }

             if(is_email_invalid($email)) {
                $errors["invalid_email"] = "Invalid email used!";
             }

             if(is_username_taken($pdo, $username)) {
                $errors["username_taken"] = "Username already taken!";
             }

             if(is_email_registered($pdo, $email)) {
                $errors["email_used"] = "Email already registered!";
             }

             require_once "config.session.inc.php";

             if($errors) {
                $_SESSION["errors_signup"] = $errors;

                $signupData =[
                    "username" => $username,
                    "email" => $email            
                ];
                $_SESSION["signup_data"] = $signupData;
                
                header("Location: ../signup.php");
                die();
             }

             create_user($pdo, $password, $username, $email);

             header("Location: ../signup.php?signup=success");

             $pdo = null;
             $stmt = null;

             die();

        } catch(PDOException $e) {
            die("Query failed" . $e->getMessage());
        }

    } else {
        header("Location: ../signup.php");
        die();
    }