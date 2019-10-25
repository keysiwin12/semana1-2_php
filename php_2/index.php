<?php
    $num1 =0;
    $num2 =0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method = "post">
        <label for="numero1">
            Ingrese numero
            <input type="number" name = "numero1">
        </label>

        <label for="numero2">
            Ingrese numero
            <input type="text" name = "numero2">
        </label>

        <input type="submit" name = "operador" value = "+">
        <input type="submit" name = "operador" value = "-">
        <input type="submit" name = "operador" value = "x">
        <input type="submit" name = "operador" value = "/">
    </form>

   <?php
        if($_POST) {
            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];
            $op = $_POST['operador'];

            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multiplicacion = $num1 * $num2;
            $division = $num1 / $num2;

            switch($op) {
                case "+" : echo $suma;
                break;

                case "-" : echo $resta;
                break;

                case "x" : echo $multiplicacion;
                break;

                case "/" : echo $division;
                break;
            } 
        }
        
   ?>

</body>
</html>


