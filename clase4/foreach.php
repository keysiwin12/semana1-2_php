<?php
    $arreglo = array(1,2,3,4,5);
    $s = "<br> <br>";
    echo $arreglo[4] . "<br>" . "<br>";
    
    foreach($arreglo as $valor) {
        echo $valor. "<br>";
    }
    $color = 'morado';

    $arreglo2 = array(1,2,'cadena',$color,5.24);

    foreach ($arreglo2 as $indice => $valor) {
        echo "este es el indice " .$indice . "-- este es el valor " . $valor ." " . var_dump($valor). "<br>" ;
    }
    
    echo $s;


    $arrayIndexado = array(1,2,3,4);

    for ($i=0 ; $i<count($arrayIndexado) ; $i++) :
        echo $arrayIndexado[$i] . "\n";  
    endfor;

    echo $s;

    $arregloAs = array ('primero'=>'a' , 'segundo' =>'b' ,"tercero" => "c");
    
    echo $arregloAs [primero];
    echo $s;

    foreach ($arregloAs as $indice => $valor) :
        echo "indice $indice --- valor $valor <br> ";
    endforeach;

    
    
    

?>