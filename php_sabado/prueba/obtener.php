<?php 
include ("conectar.php");
$con = conectar();

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
    



    <?php
        $consulta = "SELECT edad *FROM alumno";
        $rConsulta = mysqli_query($con,$consulta);

        foreach ($rConsulta as $valores) {
            ?>
            <option value=""></option>
        }
    ?>
    
</body>
</html>