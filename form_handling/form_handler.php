<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $programming_languages = htmlspecialchars($_POST["programming_languages"]);

    if(empty($firstname)){
        exit();
        header("Location: index.php");
    }

    echo "DATA THAT HAVE BEEN SUBMITTED" . '<br>';
    echo $firstname . '<br>';
    echo $lastname . '<br>';
    echo $programming_languages . '<br>';

    header("Location: index.php");
}else {
    header("Location: index.php");
}