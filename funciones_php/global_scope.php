<?php

$var1 = 12;
$var2 = 20;

function suma(){
    global $var1;
    global $var2; //si no se pone global la funcion no puede acceder a las variables internas solo a las que estan dentro de la funcion

    return $var1 + $var2;
}

echo suma();
echo "<br>";
echo $var1." var1";
echo "<br>";
echo $var2." var2"
?>