<?php

/**
    **$objeto->elemento       → elemento o funcion de una INSTANCIA
    **Clase::elemento         → elemento o funcion de una CLASE
    **self::elemento          → elemento o funcion de LA CLASE ACTUAL
    **parent::elemento        → elemento o funcion de LA CLASE PADRE
 */

class miclase{
    const const_value = "hola mundo";
}

class claseHija extends miclase{
    public static $mystatic = "variable estatica";
    public static function doublecolon() {
        echo parent::const_value."<br>";
        echo self::$mystatic;
    }
}

echo claseHija::doublecolon();

?>