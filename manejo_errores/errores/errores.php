<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //? NOTICE — variable no definida
    echo $variableInexistente;

    //? WARNING — archivo que no existe (el script continúa)
    include("no_existe.php");

    //? EXCEPCIÓN — se lanza y se atrapa con try/catch
    try {
        throw new Exception("esto es una excepción");
    } catch (Exception $e) {
        echo "Excepción atrapada: " . $e->getMessage();
    }

    //? EXCEPCIÓN SIN ATRAPAR — mata el script
    throw new Exception("excepción sin atrapar");

    //? FATAL ERROR — función que no existe (mata el script)
    // funcionQueNoExiste();
?>