<?php

    $name = htmlspecialchars($_POST['name']);

    setcookie('name', $name, time() + 86400 * 30); //30 days

    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }

    // unset
    setcookie('name', '', time() - 86400);
?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Jeff&age=20">Click</a> -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>