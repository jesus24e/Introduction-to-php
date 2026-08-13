<?php

interface Animal{
    public function hacerSonido();
}

class perro implements Animal{
    public function hacerSonido(){
        echo "woof<br>";
    }
}

class gato implements Animal{
    public function hacerSonido(){
        echo "miau<br>";
    }
}

$perro = new perro;
$gato = new gato;

$perro->hacerSonido();
$gato->hacerSonido();

?>