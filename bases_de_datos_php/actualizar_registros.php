<?php
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "test_php";

    $connection = mysqli_connect($host,$user,$password,$db);

    //echo !$connection ? "offline":"online"; 

    $query = "UPDATE empleados SET apellido = 'franco' WHERE id = 3";

    try {
        mysqli_query($connection,$query);
        echo "registro actualizado";
    } catch (mysqli_sql_exception $e) {
        echo "algo salio mal, error: " . $e->getMessage();
    }

    mysqli_close($connection)

?>