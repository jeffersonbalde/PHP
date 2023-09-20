<?php
    $A = 0;
    if(isset($_POST['submit'])){

        $area_perimeter = $_POST['area_perimeter'];
        $shapes = $_POST['shapes'];

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $A = 0;

        if($area_perimeter = "Area" && $shapes = "Triangles") {
            $A = 1/2 * ($num1 * $num2);
        }
        
        if($area_perimeter = "Area" && $shapes = "Squares") {
            $num2 = $num1;
            $A = $num1 * $num2;
        }   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="area_perimeter"></label><br>
        <select name="area_perimeter" id="area_perimeter">
            <option value="---">---</option>
            <option value="Area">Area</option>
            <option value="Perimeter">Perimeter</option>
        </select>

        <label for="shapes"></label><br>
        <select name="shapes" id="shapes">
            <option value="---">---</option>
            <option value="Triangles">Triangles</option>
            <option value="Squares">Squares</option>
            <option value="Rectangles">Rectangles</option>
            <option value="Circles">Circles</option>
            <option value="Ellipses">Ellipses</option>
        </select><br>

        <label for="num1">Number 1:</label><br>
        <input type="text" name="num1" id="num1"><br>

        <label for="num2">Number 2:</label><br>
        <input type="text" name="num2" id="num2"><br>

        <button type="submit" name="submit">Calculate</button>
        <p><?php echo $A; ?></p>
        <!-- <p>A = <?php echo $num1 . ' * ' . $num2 . ' * 1/2' . " = " . $A; ?></p> -->
    </form>
</body>
</html>