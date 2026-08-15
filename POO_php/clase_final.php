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

final class gato extends Animal
{
    public $sound_type = "maullo";
    public function __construct()
    {
        echo "nacio un gato";
    }
}

class leon extends gato{//!en este caso leon no podria heredar de gato ya que gato es una clase final

}

$bucky = new perro("bucky");
echo "\n";

?>