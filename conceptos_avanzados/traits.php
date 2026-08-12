<?php

trait mensaje {
    public function FRASE(){
        echo "hola mundo";
    }
}

class bienvenida {
    use mensaje;
}

$obj = new bienvenida();
$obj->FRASE();

?>