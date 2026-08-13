<?php
    
    //!Asignacion por referencia
    //*hace que dos varibles apunten al mismo contenido por lo que cambiar una afecta a la otra

    $a = 0;
    $b = 1;

    $a =& $b;
    
    echo "valor al unir a y b: ".$a."<br>";
    $a = 5;
    
    echo "valor de b al cambiar a: ".$b."<br>";
    
    //!pasar por referencia
    //*lo que hace es que una variable local en una funcion y una fuera de la funcion apunten al mismo contenido por lo que sucede localmente afecta a la variable como argumento de la funcion.
    
    function incremento(&$var){
        $var++;
        }
        
    $c=0;
    
    incremento($c);

    echo "valor de c al pasar por la funcion: ".$c."<br>";

     //!devolver por referencia
    //*permite devolver un dato con referencia pero es necesario señalar en la funcion que puede devolver referencias con un & antes del nombre y tambien señalar con un & antes del uso de la funcion que quieres la referencia de lo contrario no funcionara y seran copias independientes

    class miclase{
        public $cifra = 50;

        public function &obtenerValor(){
            return $this->cifra;
        }
    }

    $objeto = new miclase;
    $miCifra = &$objeto->obtenerValor();
    echo $miCifra."<br>";
    $objeto -> cifra = 5;
    echo $miCifra;

?>