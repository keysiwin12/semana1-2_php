<?php
    include "conectar.php";
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
    <form action="" method = "post">
        <label for="user">Usuario: 
            <input type="text" id = "user" name = "user">
        </label>
        <br>
        <br>
        <label for="pass">Contra: 
            <input type="password" id = "pass" name = "pass">
        </label>    
        <br>
        <br>
        <input type="submit" value = "Crear">
    </form>

    <?php
        if($_POST) {
            $nuevoUsuario = $_POST['user'];
            $nuevaContra = $_POST['pass'];

            mysqli_query($con,"insert into login(usuario,contra) values('$nuevoUsuario','$nuevaContra')") or die (mysql_error());
            echo "Usuario creado";

        }
    ?>
</body>
</html>