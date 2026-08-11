<?php

    /*
    
    *para poder usar mysqli es necesario activar la extension dentro del archivo php.ini
    *para activar la extension solo tienes que descomentar la linea que dice ";     extension=mysqli"
    *para descomentar la linea solo hay que borrar el punto y coma y guardar el archivo
    *se puede acceder al php.ini mediante config en xampp
    
    */

    $user = "root";
    $host = "localhost";
    $password = "";


    $connection = mysqli_connect($host,$user,$password);

    if(!$connection){
        die("conexión fallida: ".mysqli_connect_error());
    }

    echo "conectado";
?>