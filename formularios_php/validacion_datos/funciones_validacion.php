<?php
/*
    FUNCIONES DE VALIDACIÓN EN PHP

    *TIPO DE DATO
    ?is_int($var)       verifica si es entero
    ?is_float($var)     verifica si es decimal
    ?is_string($var)    verifica si es string
    ?is_bool($var)      verifica si es booleano
    ?is_array($var)     verifica si es array
    ?is_null($var)      verifica si es null
    ?is_numeric($var)   verifica si es número o string numérico ("123")
    ?is_object($var)    verifica si es objeto
    ?is_callable($var)  verifica si es una función ejecutable

    *EXISTENCIA Y CONTENIDO
    ?isset($var)        verifica si existe y no es null
    ?empty($var)        verifica si está vacío ("", 0, [], null, false)
    ?is_null($var)      verifica si es null específicamente

    *ARRAYS
    ?in_array($val, $arr)           verifica si un valor existe en un array
    ?array_key_exists($key, $arr)   verifica si una clave existe en un array
    ?count($arr)                    cuenta los elementos del array

    *STRINGS
    ?strlen($str)                   longitud del string
    ?str_contains($str, $needle)    verifica si contiene un substring (PHP 8+)
    ?str_starts_with($str, $needle) verifica si empieza con un substring (PHP 8+)
    ?str_ends_with($str, $needle)   verifica si termina con un substring (PHP 8+)
    ?preg_match($pattern, $str)     valida contra una expresión regular

    *FILTROS
    ?filter_var($var, FILTER_VALIDATE_EMAIL)    valida email
    ?filter_var($var, FILTER_VALIDATE_URL)      valida URL
    ?filter_var($var, FILTER_VALIDATE_INT)      valida entero
    ?filter_var($var, FILTER_VALIDATE_FLOAT)    valida decimal
    ?filter_var($var, FILTER_VALIDATE_IP)       valida IP
    ?filter_var($var, FILTER_VALIDATE_BOOLEAN)  valida booleano
*/

    $entero   = 42;
    $decimal  = 3.14;
    $texto    = "hola";
    $booleano = true;
    $arreglo  = [1, 2, 3, "php", "mysql"];
    $nulo     = null;
    $email    = "jesus@gmail.com";
    $url      = "https://google.com";

    //? TIPO DE DATO
    echo is_int($entero)     ? "es entero <br>"     : "no es entero <br>";
    echo is_float($decimal)  ? "es decimal <br>"    : "no es decimal <br>";
    echo is_string($texto)   ? "es string <br>"     : "no es string <br>";
    echo is_bool($booleano)  ? "es booleano <br>"   : "no es booleano <br>";
    echo is_array($arreglo)  ? "es array <br>"      : "no es array <br>";
    echo is_null($nulo)      ? "es null <br>"       : "no es null <br>";
    echo is_numeric("123")   ? "es numérico <br>"   : "no es numérico <br>";

    //? EXISTENCIA Y CONTENIDO
    echo isset($entero)      ? "existe <br>"        : "no existe <br>";
    echo empty($nulo)        ? "está vacío <br>"    : "no está vacío <br>";

    //? ARRAYS
    echo in_array("php", $arreglo)            ? "php está en el array <br>"      : "no está <br>";
    echo array_key_exists(0, $arreglo)        ? "la clave 0 existe <br>"         : "no existe <br>";
    echo "total elementos: " . count($arreglo) . "<br>";

    //? STRINGS
    echo strlen($texto)                        . " caracteres <br>";
    echo str_contains($texto, "ho")           ? "contiene 'ho' <br>"             : "no contiene <br>";
    echo str_starts_with($texto, "ho")        ? "empieza con 'ho' <br>"          : "no empieza <br>";
    echo str_ends_with($texto, "la")          ? "termina con 'la' <br>"          : "no termina <br>";
    echo preg_match("/^[a-z]+$/", $texto)     ? "solo letras minúsculas <br>"    : "tiene otros caracteres <br>";

    //? FILTROS
    echo filter_var($email, FILTER_VALIDATE_EMAIL) ? "email válido <br>"         : "email inválido <br>";
    echo filter_var($url,   FILTER_VALIDATE_URL)   ? "URL válida <br>"           : "URL inválida <br>";
    echo filter_var($entero,FILTER_VALIDATE_INT)   ? "entero válido <br>"        : "entero inválido <br>";
?>