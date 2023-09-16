<?php
    $name = "Jefferson Balde";
    
    // get the length 
    echo strlen($name) . '<br>';

    // find the position of the first
    echo strpos($name, 'e') . '<br>';

    // find the position of the last
    echo strrpos($name, 'e') . '<br>';

    // reverse a string
    echo strrev($name) . '<br>';

    // convert lowercase
    echo strtolower($name) . '<br>';

    // convert uppercase
    echo strtoupper($name) . '<br>';

    // uppercase the first word
    echo ucwords($name) . '<br>';

    // string replace
    echo str_replace('Balde', 'Valdez', $name) . '<br>';

    // return s specified string
    echo substr($name, 0, 10) . '<br>';
    echo substr($name, 10, 15) . '<br>';

    // starts with
    if(str_starts_with($name, 'J')) {
        echo 'Jeff' . '<br>';
    }

    // ends with
    if(str_ends_with($name, 'e')) {
        echo 'Balde' . '<br>';
    }

    // with HTML
    $hi = '<h1>Hi</h1>';
    echo $hi;

    // with JS
    $alert = '<script>alert(1)</script>';
    // echo $alert;
    echo htmlspecialchars($alert) . '<br>';

    // format string
    printf('PHP IS %s', 'GREAT' . '<br>');
    printf('5 + 5 = %s', 5 + 5); 

?>