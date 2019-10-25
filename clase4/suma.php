<?php
    if($_POST) {
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        function sumar($numero1,$numero2) {
            return $numero1 + $numero2;
        }
        echo "la suma es: " . sumar($num1,$num2);
    }
    
    


?>