<?php

    function s() {
        echo " <br> <br>";
    }

    function saludo() {
        echo "hola desde una funcion";
    }

    saludo();

     s();

    $age = 18;

    if($age <=18) {
        function party() {
            echo "Bienvenido a la fiesta";
        }
    }
    party();

    s();

    function foo() {
        function bar() {
            echo "Hola ya exsito";
        }
    }

    foo();

    bar();

    s();

    $arreglo2 = array(1,2,3,4,5,6);
    

    function sumarArray($entrada) {
        $x = $entrada[0];
        $y = $entrada [4];
        $r = $x + $y;
        echo "Suma de arreglos : " . $r;
    }

    sumarArray($arreglo2);

    s();

    function recursividad($a) {
        if($a<=20) {
            echo "$a \n";
            recursividad($a+1);
        }
    }

    recursividad(1);

    s();


    $b = 1;
    while ($b <= 20) {
        echo $b++ . "\n"; 
    }

    s();

    function funcionRetorna($x =9) {
        $r = $x+1;
        return $r;
    }

    echo funcionRetorna();

    s();

    function flores() {
        $flor = 'clavel';
        $color = 'morado';
        $cantidad = 10;
        return array($flor,$color,$cantidad); 
    }

    list($fl,$co,$can) = flores();

    echo "hola soy un $fl mi color es $co y somos $can";

    s();

    

    // Funcion Anonima 

    $suma = function($num1 , $num2) {
        return $num1 + $num2;
    };

    echo $suma(5,8);
?>