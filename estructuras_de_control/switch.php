<?php

    $puntuacion = "g";

    switch($puntuacion){
        case ($puntuacion<=5 && $puntuacion>=0):
            echo "reprobado";
            break;
        case($puntuacion>5&&$puntuacion<=7):
            echo "aprobado con la minima";
            break;
        case($puntuacion>7 && $puntuacion<=9):
            echo "aprobado";
            break;
        case($puntuacion==10):
            echo "calificacion sobresaliente";
            break;
        default: echo "puntuacion fuera de rango o del tipo incorrecto";
        
    }

?>