<?php

class DataBase 
{
    static $host = "localhost";
    static $dbName = "test_php";
    static $password = "123456";

    public static function connect() {
        echo "\nconectando con: " . self::$host . " a " . self::$dbName;
    }
}

echo DataBase::$dbName; 
echo DataBase::$host; 
echo DataBase::$password; 

DataBase::connect();
?>