<?php

function miCallback($item) {
    return strlen($item);
}

$strings = array("manzana","naranja","palatano","coco");

$longitudes = array_map("miCallback",$strings);
print_r($longitudes);

$numeros = [3, 1, 4, 1, 5, 9, 2, 6];

// array_map — transforma
$dobles = array_map(fn($n) => $n * 2, $numeros);

// array_filter — filtra
$mayores = array_filter($numeros, fn($n) => $n > 4);

// usort — ordena de mayor a menor
usort($numeros, fn($a, $b) => $b - $a);

// array_reduce — suma todos
$suma = array_reduce($numeros, fn($carry, $n) => $carry + $n, 0);

// preg_replace_callback — reemplaza con lógica propia
$texto = "tengo 3 gatos y 5 perros";
$resultado = preg_replace_callback('/\d+/', fn($m) => $m[0] * 2, $texto);
// "tengo 6 gatos y 10 perros"
?>