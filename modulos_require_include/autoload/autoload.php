<?php
/*
 * spl_autoload_register() registra una función que PHP llama automáticamente
 * cada vez que se usa una clase que no ha sido cargada todavía.
 *
 * REQUISITOS:
 * - El nombre del archivo debe coincidir exactamente con el nombre de la clase
 * - Si el archivo está en otra carpeta, hay que incluirla en la ruta
 * - Solo funciona con CLASES, para funciones sueltas se sigue usando require_once
 *
 * VENTAJA:
 * - Evita tener que escribir un require_once por cada clase
 *
 * LIMITACIONES:
 * - Si el nombre del archivo no coincide con la clase → no encuentra el archivo
 * - Si la clase está en otra carpeta y no se especifica → no encuentra el archivo
 * - Funciones sueltas → no se dispara, require_once manual obligatorio
 */

function app_autoloader($class){
    include $class . ".php";
}

spl_autoload_register("app_autoloader");