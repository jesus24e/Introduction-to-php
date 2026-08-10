<?php

    $semana = array("lunes", "martes","miercoles","jueves","viernes","sabado","domingo");

    foreach($semana as $dia){
        echo $dia.".<br>";
    }

    $meses = array("enero"=>31,"febrero"=>28,"marzo"=>30);

    foreach($meses as $mes=>$dias){
        echo $mes . " tiene ".$dias." dias.<br>";
    }
?>