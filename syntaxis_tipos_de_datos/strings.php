<?php

    echo '"i\'m going to"';
    echo '"i\\m going to"';

    $mi_string = "rodriguez apellido";

    echo strlen($mi_string);//cantidaad de caracteres en una cadena
    
    echo str_word_count($mi_string);//cantidad de grupos de caracteres (palabras) de una cadena

    echo strrev($mi_string);//cadena invertida

    echo strpos($mi_string,"z");//indice de un caracter o del primer caracter de una palabra

    echo str_replace("r","R",$mi_string);//reemplaza una cadena o caracter con otro en una variable o cadena

?>