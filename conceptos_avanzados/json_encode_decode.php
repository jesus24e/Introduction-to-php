<?php

$frutas = array("piña","pera","platano");
echo json_encode($frutas);

$jsonobj = '{"nombre":"roberto","edad":37,"sueldo":1500}';

//*dependiendo del valor del argumento associative de json_decode se trabaja con un objeto o con un arreglo asociativo (diccionario)

$obj = json_decode($jsonobj);

echo $obj;

$arr = json_decode($jsonobj,true);

echo $arr["nombre"];
?>