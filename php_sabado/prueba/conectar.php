<?php
    function conectar() {
        $user = "root";
        $pass = "";
        $server = "localhost";
        $db = "mysql";
        $con = mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar");
        return $con;
    }
    
    conectar();
    
    
    
?>

