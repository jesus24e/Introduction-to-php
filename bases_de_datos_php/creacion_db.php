<?php
    $host = "localhost";
    $user = "root";
    $password = "";

    $connection = mysqli_connect($host,$user,$password);

    echo !$connection ? "sin conexion":"online";

    $query = "CREATE DATABASE if not exists test_php";

    if(mysqli_query($connection,$query)){
        echo "creacion exitosa";
    }else{
        echo "error de creacion: " . mysqli_error($connection);
    }

    mysqli_select_db($connection,"test_php");


    $query = "CREATE TABLE if not exists empleados (id int(6) unsigned auto_increment primary key, nombre varchar(30) not null, apellidos varchar(30) not null, email varchar(50), reg_date timestamp default current_timestamp on update current_timestamp)";

    mysqli_query($connection,$query);

    $query = "INSERT INTO empleados (nombre, apellidos,email) VALUES ('jesus','rodriguez franco','jesus@gmail.com')";

    mysqli_query($connection,$query);

    mysqli_close($connection);
?> 