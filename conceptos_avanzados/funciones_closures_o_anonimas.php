<?php

function reemplazo_espacios($texto){
    $reemplazo = function ($coincidencias){
        return str_replace($coincidencias[1]," ",'&nbsp;')." ";
    };
    return preg_replace_callback("/( +) /",$reemplazo, $texto);
}

?>