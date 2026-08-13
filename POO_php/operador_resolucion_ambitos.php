<?php

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