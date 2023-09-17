<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        try {
            require_once 'dbh.inc.php';

            // $query = "INSERT INTO login_register (name, username, email, password) VALUES (
            //             ?, ?, ?, ?);";

            $query = "INSERT INTO login_register (name, username, email, password) VALUES (
                :name, :username, :email, :password);";
            
            $statement = $pdo->prepare($query);
            
            $statement->bindParam(":name", $name);
            $statement->bindParam(":username", $username);
            $statement->bindParam(":email", $email);
            $statement->bindParam(":password", $password);
            $statement->execute();
            // $statement->execute([$name, $username, $password, $email]);

            $pdo = null;
            $statement = null;

            header('Location: ../index.php');

            die();

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }else {
        header('Location: ../index.php');
    }