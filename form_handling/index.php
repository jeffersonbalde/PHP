<!-- <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = htmlspecialchars($_POST["firstname"]);
        $lastname = htmlspecialchars($_POST["lastname"]);
        $programming_languages = htmlspecialchars($_POST["programming_languages"]);

        echo "DATA THAT HAVE BEEN SUBMITTED" . '<br>';
        echo $firstname . '<br>';
        echo $lastname . '<br>';
        echo $programming_languages . '<br>';
    }

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="form_handler.php" method="POST">
            <label for="firstname">Firstname: </label>
            <input type="text" name="firstname" placeholder="Firstname..." id="firstname">

            <label for="lastname">Lastname: </label>
            <input type="text" name="lastname" placeholder="Lastname..." id="lastname">

            <label for="programming_languages">programming languages: </label>
            <select name="programming_languages" id="programming_languages">
                <option value="java">java</option>
                <option value="javascript">javascript</option>
                <option value="typescript">typescript</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>