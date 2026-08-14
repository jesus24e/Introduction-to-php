<?php

class Animal
{
    public $sound_type = "hago un sonido";

    public function __construct()
    {
        echo "nacio un animal";
    }

    public function correr(){
        echo "yo corro";
    }

    public function caminar(){
        echo "yo camino";
    }

    public function hacer_sonido(){
        echo $this->sound_type;
    }
}

class perro extends Animal
{
    public string $nombre; 
    public $sound_type = "ladro";
    
    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        echo "nacio" . $this->nombre;
    }
}

class gato extends Animal
{
    public $sound_type = "maullo";
    public function __construct()
    {
        parent::__construct();//!hace que tambien se ejecute el codigo del constructor del padre
        echo "nacio un gato";
    }
}

$bucky = new perro("bucky");
echo "\n";
$bucky->correr();
echo "\n";
$bucky->hacer_sonido();
echo "\n";

$gato = new gato();
echo "\n";

$gato->correr();
echo "\n";
$gato->hacer_sonido();
echo "\n";

if($bucky instanceof Animal){
    echo "$bucky->nombre es un Animal";
}
if($bucky instanceof perro){
    echo "$bucky->nombre es un perro";
}


?>