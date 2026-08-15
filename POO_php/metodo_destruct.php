<?php
namespace destruct;

class vivienda{
    public $nombre;
    public $puertas;
    public $ventanas;
    public $habitaciones;
    public $terraza;
    public $color;

    public function __construct($nombre,$puertas, $ventanas, $habitaciones, $terraza, $color){
        $this->nombre = $nombre;
        $this->puertas = $puertas;
        $this->ventanas = $ventanas;
        $this->habitaciones = $habitaciones;
        $this->terraza = $terraza;
        $this->color = $color;
    }

    public function descripcion() {
        echo $this->puertas . "\n";
        echo $this->ventanas . "\n";
        echo $this->habitaciones . "\n";
        echo $this->terraza . "\n";
        echo $this->color . "\n";
    }

    public function __destruct()//*este metodo se ejecuta cuando ya no se tiene algun otro uso para el objeto en el programa es decir cuando se concluye y funciona incluso en ciclos, al finalizar se destruye
    {
        print "destruyendo " .$this->nombre."\n";
    }
}

$casa1=new vivienda("casa 1",2,8,4,true,"verdad");

$casa1->descripcion();

?>