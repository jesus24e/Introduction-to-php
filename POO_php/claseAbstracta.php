<?php
    //*una clase abstracta permite declarar un metodo y despues en una clase hija especificar que es lo que hace ese metodo
    
    abstract class vivienda{
        public $nombre;

        public function __construct($nombre)
        {
            $this->nombre = $nombre;
        }

        abstract public function descripcion() : string;
    }


    class chalet extends vivienda{
        public function descripcion() : string {
            return "chalet mi hogar. $this->nombre";
        }
    }

    class atico extends vivienda{
        public function descripcion() : string {
            return "para personas de gusto refinado es un $this->nombre";
        }
    }

    class chateau extends vivienda{
        public function descripcion() : string {
            return "La elegancia europea se mide por la extravagancia de su $this->nombre";
        }
    }

    $chalet = new chalet("jesus");
    echo $chalet->descripcion();


?>