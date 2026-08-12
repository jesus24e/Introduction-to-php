<?php

    $string = "<h1>hola mundo</h1>";
    $nueva_string = filter_var($string, FILTER_SANITIZE_STRING);
    echo $nueva_string;
    echo $string;

    $int = "12.2";

    echo filter_var($int,FILTER_VALIDATE_INT)||$int == 0 ? "es entero":"no es entero";
    echo "<br><br>";

    $ip = "12.2";

    echo filter_var($ip,FILTER_VALIDATE_IP)? "es un ip":"no es una ip";

    /*
    *-- VALIDACIÓN (devuelven true o false) --
    *FILTER_VALIDATE_EMAIL       verifica si es un email válido
    *FILTER_VALIDATE_URL         verifica si es una URL válida
    *FILTER_VALIDATE_IP          verifica si es una dirección IP válida
    *FILTER_VALIDATE_INT         verifica si es un número entero
    *FILTER_VALIDATE_FLOAT       verifica si es un número decimal
    *FILTER_VALIDATE_BOOLEAN     verifica si es true/false/yes/no/1/0
    *FILTER_VALIDATE_DOMAIN      verifica si es un dominio válido

    *-- SANEAMIENTO (limpian y devuelven el valor modificado) --
    *FILTER_SANITIZE_EMAIL           elimina caracteres inválidos de un email
    *FILTER_SANITIZE_URL             elimina caracteres inválidos de una URL
    *FILTER_SANITIZE_NUMBER_INT      deja solo números, + y -
    *FILTER_SANITIZE_NUMBER_FLOAT    deja solo números y .
    *FILTER_SANITIZE_SPECIAL_CHARS   convierte caracteres especiales a HTML entities
    *FILTER_SANITIZE_ADD_SLASHES     agrega \ antes de comillas
    */

?>