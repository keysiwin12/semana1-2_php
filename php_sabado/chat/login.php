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
        <input type="submit" value = "Ingresar">
    </form>

    <?php
        $user= "keysi";
        $pass = "123";
        if($_POST) {
            $usuario = $_POST['user'];
            $contra = $_POST['pass'];
            if($user ===$usuario && $pass ===$contra) {
                ?>
            <META HTTP-EQUIV="REFRESH" CONTENT=" 0 ;URL=chat.php"> <?php
            }
            else    
                echo "Usuario incorrecto";
        }
    ?>

</body>
</html>