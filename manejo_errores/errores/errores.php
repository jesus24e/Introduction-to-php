<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //? NOTICE — variable no definida
    //echo $variableInexistente;

    //? WARNING — archivo que no existe (el script continúa)
    include("no_existe.php");

    //? EXCEPCIÓN — se lanza y se atrapa con try/catch
    try {
        throw new Exception("esto es una excepción");
    } catch (Exception $e) {
        echo "Excepción atrapada: " . $e->getMessage()."\n";
    }
    finally{
        echo "se termina el try catch\n";//!siempre se ejecuta despues de que hay un error, normalmente es cerrar recursos como conexiones a bases de datos
    }
    
    class DBexception extends Exception{}
    
    class Main{
        public function __construct()
        {
            try{
                throw new DBexception("error con la conexion a la db.");
            }catch(DBexception $e){
                echo "-------------error especifico: ".$e->getMessage()."-----------------------\n";
            }
        }
    }
    
    $main = new Main();

    

    //? EXCEPCIÓN SIN ATRAPAR — mata el script
    throw new Exception("excepción sin atrapar");

    //? FATAL ERROR — función que no existe (mata el script)
    // funcionQueNoExiste();