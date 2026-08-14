<?php
    $conn = mysqli_connect("hostname", "user", "password", "database");

    // iniciar la transacción — desactiva el autocommit
    mysqli_autocommit($conn, false);

    $sql1 = "UPDATE cuentas SET saldo = saldo - 100 WHERE nombre_cuenta = 'cuenta_origen'";
    $sql2 = "UPDATE cuentas SET saldo = saldo + 100 WHERE nombre_cuenta = 'cuenta_destino'";

    if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)){
        mysqli_commit($conn);   // la transaccion se completa
        echo "Transacción completada con éxito";
    } else {
        mysqli_rollback($conn); // la transaccion no se completa y se deshacen las operaciones hechas
        echo "Error en la transacción";
    }

    // cerrar la conexión a la base de datos
    mysqli_close($conn);
?>