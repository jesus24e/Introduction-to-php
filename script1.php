<?php
    /*
        ejemplo comentario de multiples lineas
    */

    //comentario de una sola linea
    
    echo "HOLA MUNDO\n";

    /*
    Las variables pueden compartan el mismo valor en memoria pero
    cambiar una no afecta a la otra
    */

    $var1 = "1";
    $Var1 = $var1;
    
    echo $Var1, "\n";
    echo $var1, "\n";

    $var1 = $var1 + 1;

    echo $Var1,"\n";
    echo $var1,"\n";

    //constantes

    define("constante_1", "esto es una constante");//las constantes se podian hacer case sensitive o no pero parece que la opcion ya no es valida

    echo constante_1;
?>