<?php

$fichero = "archivo.txt";
$archivo = fopen($fichero,"r");
$contents = fread($archivo,filesize($fichero));
echo $contents;
fclose($archivo);

$archivo = fopen($fichero,"w");
$texto = "hola mundo";
fwrite($archivo,$texto);

fclose($archivo);

?>