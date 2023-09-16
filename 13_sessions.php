<?php
    
    session_start();

    if(isset($_POST['submit'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        
        if($username == 'jeff' && $password == "password") {
            $_SESSION['username'] = $username;
            header('Location: session/index.php');
        }else {
            echo 'Incorrect Login';
        }
    }

?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Jeff&age=20">Click</a> -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="text" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>