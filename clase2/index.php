
    <?php
        include("conectar.php");
        $con = conectar();
        echo "se conecto";
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>clase2</title>
</head>
<body>
    <form action="" method="post">

        
            <p>nombre </p>
            <input type="text"  name  = "nomb" >             
            <p>edad</p>
            <input type="number" name="edad">   
            <p>sexo  </p>
            <input type="text" name="sexo">
        
        <!-- <input type="radio" name="sexo" value="Femenino">Femenino
        <input type="radio" name="sexo" value="Masculino">Masculino
        <br> -->
        <br>
        <br>
        <input type="submit" value="Enviar Consulta">
        
    </form>

    <?php
        if($_POST) {
            $n = $_POST['nomb'];
            $e = $_POST['edad'];
            $s = $_POST['sexo'];

            mysqli_query($con,"insert into prueba(nombre,edad,sexo)values('$n','$e','$s')")  or die (mysql_error());
            echo "<h3> Datos Guardados </h3>";
        }
    ?>
</body>
</html>