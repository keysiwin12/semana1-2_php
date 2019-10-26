<?php
    include "conectar.php";
    $con = conectar();

    $consulta = "SELECT usuario FROM login ";
    $lConsulta = mysqli_query($con,$consulta) or die (mysqli_error());

    foreach ($lConsulta as $valores) {
        if{

        }
        header()
        else {
            
        }
        echo "$valores[usuario]";
        
    }

?>