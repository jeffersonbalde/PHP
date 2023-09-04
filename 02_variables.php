<?php

    $name = "Jefferson Balde"; // String
    $age = 20; // Int 
    $married = false; // Bool
    $week_allowances = 100.0; // Float

    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    var_export($married);
    echo "<br>";
    var_export($week_allowances);
    echo "<br><br>";

    // Concatenation
    // print "Hi I'm " . $name . " " . $age . " years old";
    print "Hi I'm $name $age years old";
    echo "<br><br>";

    // Arithmetic
    print "5" + "5";
    echo "<br><br>";

    // Constant
    define("GREETING","Hello you! How are you today?");
    echo GREETING;
?>