<?php

    function favoriteLanguage($languages){
        echo $languages . " is fun." . "<br>";
    }

    favoriteLanguage("JavaScript");

    function sum($num1, $num2){
        return $num1 + $num2;
    }

    echo sum(5,5);

    $subtract = function($num1, $num2){
        return $num1 - $num2;
    };

    print "<br>";
    print $subtract(10, 5);
    
    $mutliply = fn($n1, $n2) => $n1 * $n2;

    print "<br>";
    print $mutliply(10, 5);
?>