<?php

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        try{
            

            require_once 'dbh.inc.php';
            require_once 'login.model.inc.php';
            require_once 'login.contr.inc.php'; 

            // ERROR HANDLERS
            $errors = [];

            if(is_input_empty($username, $password)) {
                $errors["empty_input"] = "Fill in all fields!";
            } 
            
            $result = get_user($pdo, $username);

            if(is_username_wrong($result)){
                $errors["login_incorrect"] = "Incorrect login info!";
            }

            if(!is_username_wrong($result) && is_password_wrong($password, $result["password"])) {
                $errors["login_incorrect"] = "Incorrect login info!";
            }

            require_once "config.session.inc.php";

            if($errors) {
                $_SESSION["errors_login"] = $errors;
                
                header("Location: ../login.php");
                die();
            }

            $newSessionId = session_create_id();
            $sessionId = $newSessionId . "_" . $result["id"];
            session_id($sessionId);   
            
            $_SESSION["user_id"] = $result["id"];
            $_SESSION["user_username"] = htmlspecialchars($result["username"]);

            $_SESSION["last-regeneration"] = time();

            header("Location: ../login.php?login=success");
            $pdo = null;
            $statement = null;
 
        } catch(PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }


    } else {
        header("Location: ../login.php");
        die();
    }