<?php

    //!la zona horaria debe cambiarse manualmente y hay dos formas:
    //!la primera es en el codigo con la funcion date_default_timezone_set();
    //!la segunda es desde el php.ini modificando el dato "date.timezone = 'America/Mexico_City'"

    date_default_timezone_set("America/Mexico_City");

    echo "hoy es " . date("Y/m/d") . "<br>";//el contenido mostrado difiere dependiendo de si la letra es mayuscula o minuscula
    echo "hoy es " . date("y/M/D") . "<br>";
    echo "hoy es " . date("y.m.d") . "<br>";
    echo "hoy es " . date("y-m-d") . "<br>";
    echo "hoy es " . date("l") . "<br>";

    echo "Ahora mismo son las " . date("h:i:sa"). "<br>";
    echo "Ahora mismo son las " . date("h:I:sa"). "<br>";

    $t = time();//?fecha en formato unix es decir en segundos
    echo $t . "<br>";
    echo date("Y-m-d h:i:sa",$t);
    echo "<br>";
    echo date("Y-m-d",$t);
?>