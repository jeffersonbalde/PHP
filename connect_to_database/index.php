<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Signup</h3>

    <form action="includes/formhandler.inc.php" method="POST">
        <label for="name">Name: </label> 
        <input type="text" name="name" id="name"> <br>

        <label for="username">Username: </label> 
        <input type="text" name="username" id="username"> <br>
        
        <label for="email">Email: </label>
        <input type="text" name="email" id="email"> <br>

        <label for="password">Password: </label> 
        <input type="text" name="password" id="password"> <br>

        <br>
        <button>Signup</button>
    </form>
</body>
</html>