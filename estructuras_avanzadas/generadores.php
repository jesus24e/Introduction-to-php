<?php

    /**
     **el generador tiene las propiedades de un objeto gracias a yield y es por eso que se puede usar con 
     **for each y ademas la ventaja que que va pausando la ejecucion lo que lo hace mas eficiente.s
     */

    function contador(){
        for($i = 0;$i<101;$i++){
            yield $i;//*la funcion de yield es pausar la ejecucion de la funcion y entregar el resultado antes de reanudar la ejecucion con el estado en el que se quedo
        }
    }

    $generador = contador();

    foreach($generador as $valor){
        echo $valor.", ";
    }
    
?>