<?php

    // Simple Array
    $programming_languages = ["Java", "Python", "PHP", "JavaScript", "TypeScript"];
    $frameworks = array("ReactJs", "NextJs", "TailwindCSS", "Framer Motion");
    $numbers = [1,2,3,4,5];

    // print_r($programming_languages);
    // print_r($frameworks);

    // var_dump($programming_languages);
    // var_export($programming_languages);

    // var_dump($numbers);

    print $programming_languages[2];

    // Associative Array
    $databases = [
        1 => 'MySQL',
        2 => 'MongoDB',
        3 => 'PrismaSQL'
    ];

    print $databases[1];

    $programmers = [
        "Jeff" => "JavaScript/Java/PHP/Python/TypeScript",
        "Nitz" => "C/C++/C#",
        "George" => "Kotlin"
    ];

    print $programmers["Jeff"];

    // Multidimensional Array
    $My_Family = [
        [
            "name" => "Jefferson Sabanal Balde",
            "age" => 20
        ],
        [
            "name" => "Ryan Moquila",
            "age" => 18
        ]
    ];

    print $My_Family[0]["name"];
    print "<br><br>";

    var_dump(json_encode($My_Family));
?>