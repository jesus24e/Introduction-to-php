<?php

trait myUtilities
{
    function decir_nombre(){
        $nombre = $this->nombre;
        echo "mi nombre es $nombre";
    }
}

class perro
{
    use myUtilities;
    protected string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }
}

$perro1 = new perro("bucky");
//echo $perro1->nombre;

$perro1->decir_nombre();
$perro1 = new perro("manchas");

$perro1->decir_nombre();