<?php
namespace clonar;
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

$casa1=new \clonar\vivienda();
$casa1->puertas = 2;
$casa1->ventanas = 8;
$casa1->habitaciones = 4;
$casa1->terraza = true;
$casa1->color = "verde";

echo "CASA ORIGINAL:";
echo "<br>";
$casa1->descripcion();

$casa2 = $casa1; //*similar a asignar por referencia
$casa3 = clone $casa1;

$casa1->puertas=1;

echo "<br>";
echo "CASA 1:";
echo "<br>";
$casa1->descripcion();
echo "<br>";
echo "CASA 2:";
echo "<br>";
$casa2->descripcion();
echo "<br>";
echo "CASA 3:";
echo "<br>";
$casa3->descripcion();

?>