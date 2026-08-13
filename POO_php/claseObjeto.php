<?php

class vivienda{
    public $puertas;
    public $ventanas;
    public $habitaciones;
    public $terraza;
    public $color;

    public function descripcion() {
        echo $this->puertas;
        echo $this->ventanas;
        echo $this->habitaciones;
        echo $this->terraza;
        echo $this->color;
    }
}

$casa1=new vivienda;
$casa1->puertas = 2;
$casa1->ventanas = 8;
$casa1->habitaciones = 4;
$casa1->terraza = true;
$casa1->color = "verde";

$casa1->descripcion();

?>