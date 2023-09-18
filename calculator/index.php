<?php

    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;
        switch($operation){
            case 'Add': 
                        $result = $num1 + $num2;
                        echo '<p>Result: ' . $result . '</p>';
                        // echo '<p>Result: $result</p>';
                        break;
            case 'Subtract': 
                        $result = $num1 - $num2;
                        echo '<p>Result: ' . $result . '</p>';
                        // echo '<p>Result: $result</p>';
                        break;
            case 'Multiply': 
                        $result = $num1 * $num2;
                        echo '<p>Result: ' . $result . '</p>';
                        // echo '<p>Result: $result</p>';
                        break;
            case 'Divide': 
                            if($num2 != 0){
                                $result = $num1 / $num2;
                                echo '<p>Result: ' . $result . '</p>';
                            }else {
                                echo "Cannot divide by zero";
                            }
                            break;
            default: echo "Invalid";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Number 1: </label><br>
        <input type="text" name="num1"><br>

        <label for="num2">Number 2: </label><br>
        <input type="text" name="num2"><br>

        <select name="operation">
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
        </select>
        
        <br>
        <button type="submit" name="submit">Calculate</button>

        <p><?php echo $result; ?></p>
    </form>
</body>
</html>