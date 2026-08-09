<?php

    $frutas = array("mango", "fresa","naranja");//esto es un array indexado
    $frutas[3]="melon";
    echo "me encanta desayunar " . $frutas[3] . ", " . $frutas[1] . " o " . $frutas[2] . ".";

    
    //esto es un array asociativo o tambien es posible verlo como un diccionario en otros lenguajes: clave->valor
    $edad = array("jorge"=>"42", "mario"=>"35");

    $edad["lola"]="56";

    echo "mario tiene " . $edad["mario"] . " años.";
    echo "lola tiene " . $edad["lola"] . " años.";

    $frutas1 = array(
        array("mango",22,18),
        array("sandia",15,13),
        array("naranja",5,2),
        array("fresa",17,15)
    );

    
    echo "tenemos " . $frutas1[0][0] . ": vendidas: ".$frutas1[0][1]." y disponibles: ". $frutas1[0][2] . ".<br>";
    echo "tenemos " . $frutas1[1][0] . ": vendidas: ".$frutas1[1][1]." y disponibles: ". $frutas1[1][2] . ".<br>";
    echo "tenemos " . $frutas1[2][0] . ": vendidas: ".$frutas1[2][1]." y disponibles: ". $frutas1[2][2] . ".<br>";
    echo "tenemos " . $frutas1[3][0] . ": vendidas: ".$frutas1[3][1]." y disponibles: ". $frutas1[3][2] . ".<br>";

    echo "el array contiene ".count($frutas1)." elementos.";

    //echo sort($frutas1);
    //echo rsort($frutas1);
    print_r($frutas1);
?>
