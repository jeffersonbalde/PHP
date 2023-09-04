<?php

    for($i = 0; $i < 10; $i++){
        echo $i;
        echo "<br>";
    }

    $my_programming_languages = ["Java", "JavaScript", "TypeScript", "Python", "PHP"];

    for($i = 0; $i < count($my_programming_languages); $i++){
        print $my_programming_languages[$i] .  "<br>";
    }

    foreach($my_programming_languages as $index => $languages){
        print $index + 1 . ' - ' . $languages . '<br>';
    }

?>