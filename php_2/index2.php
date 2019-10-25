<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        <input type="text" name = "numero">
        <input type="submit" value = "calcular">
    </form>

    <?php
        if($_POST) {
                     
            $num = $_POST['numero'];
            if($num % 2 ==0)
                echo $num . " es PAR";
            else
                echo  $num . " es Impar";
        }
    ?>
</body>
</html>