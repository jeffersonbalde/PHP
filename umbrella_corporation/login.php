<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umbrella Corporation</title>
    <style>
        body {
            background-image: url(umbrella_bg.webp);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: Arial, Helvetica, sans-serif;
            color: grey;
        }

        .umbrella {
            width: 200px;
            height: 200px;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: black;
            width: 280px;
            border: 2px solid red;
            opacity: 0.9;
            border-radius: 8px;
            height: 500px;
            padding: 50px 10px; 
            margin-top: 50px;
        }

        .header{
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-right: 50px;
        }

        h1 {
            font-size: 25px;
        }

        label{
            font-size: 17px;
            margin-bottom: -10px;
        }

        input{
            width: 100%;
            padding: 7px;
            background-color: whitesmoke;
            border-radius: 5px;
            opacity: 0.9;
        }

        button {
            color: whitesmoke;
            background-color: red;
            width: 100%;
            padding: 7px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <main>
        <div class="header">
            <img src="umbrella.png" alt="Umbrella" class="umbrella">
            <h1>"Our Business Is Life Itself"</h1>
        </div>

        <form action="" method="POST" >
            <label for="username">Username: </label><br>
            <input type="text" name="username" id="username" placeholder="Username"><br>

            <label for="password">Password: </label><br>    
            <input type="password" name="password" id="password" ><br>   

            <button type="submit" name="submit">Login</button>
        </form>

        <br>
        <a href="signup.php" class="signup">Signup</a>
    </main>
</body>
</html>