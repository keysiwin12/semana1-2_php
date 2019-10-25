<?php
    function conectar() {
        $user = "root";
        $pass = "";
        $server = "localhost";
        $db = "prueba";
        $con = mysqli_connect($server,$user,$pass,$db) or die ("error al conecta ala bd");
        return $con;
    }


?>

