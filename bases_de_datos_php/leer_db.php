<?php

    $host = "localhost";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($host,$username,$password,"test_php");

    echo !$connection ? "error":"online";
    $result = mysqli_query($connection,"select * from empleados");
    echo "<br><br>";
    echo "<br><br>";
    //var_dump(mysqli_fetch_assoc($result));//retorna un array asociativo o 'diccionario' del primer registro del resultado de la consulta
    var_dump(mysqli_fetch_all($result,MYSQLI_ASSOC));//retona un array si no especificas que sea asociativo, el array retornado incluye todos los registros dentro del resultado

    //!es importante mencionar que si usas ambos uno seguido del otro el puntero del index seguira donde se haya quedado el anterior.
    //!esto se refiere a que si primero uso el fetch_all y despues el fetch_assoc, cuando el codigo llegue al assoc ya no abra un registro despues del ultimo indice porque continuara en el ultimo que se haya quedado.
    
    mysqli_close($connection);

?>