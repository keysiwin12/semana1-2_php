<?php
    include ("conectar.php");
    $con = conectar();

    $consulta = "SELECT mensaje FROM chat2 order by idMensaje desc ";
    
    $rconsulta = mysqli_query($con,$consulta) or die (mysql_error());
    
    foreach($rconsulta as  $valores) {
        echo "- $valores[mensaje] <br>";
    }

    header("refresh:3 ; consultar.php");

    

?>