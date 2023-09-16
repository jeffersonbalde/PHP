<?php
    $student = ['ronan', 'krizza'];

    // get length
    echo count($student) . '<br>';

    // search array
    var_export(in_array('ronan', $student));

    // add to array
    $student[] = "ian";
    array_push($student, 'carlos');
    array_unshift($student, 'lee');

    // remove from array
    array_pop($student);
    array_shift($student);  
    unset($student[2]);

    // split into 2 chunks
    $chunked_array = array_chunk($student, 3);

    // merge array
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];
    
    // array combine
    $a = [1,2,3];
    $b = ['one', 'two', 'three'];
    $c = array_combine($a, $b); 

    //  array keys
    $keys = array_keys($c); 

    // array flip
    $flip = array_flip($c);

    // range
    $numbers = range(1, 10);

    // array map
    $new_num = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);

    // array map with arrow functions
    $new_num2 = array_map(
        fn($num) => "Number $num" , $numbers
    );
    
    // array filter
    $lessthan5 = array_filter($numbers, fn($num) => 
        $num <= 5
    );

    // array reduce
    $sum = array_reduce($numbers, fn($carry, $num) => 
        $carry + $num
    );

    print_r($sum);
?>