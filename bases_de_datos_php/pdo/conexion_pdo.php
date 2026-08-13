<?php
/*
    PDO (PHP Data Objects) — forma moderna de conectar a bases de datos en PHP

    *VENTAJAS SOBRE MYSQLI
    ?soporta múltiples motores de BD (MySQL, PostgreSQL, SQLite, etc)
    ?usa prepared statements de forma más limpia
    ?manejo de errores con excepciones
*/

    $host     = "localhost";
    $db       = "test_php";
    $user     = "root";
    $password = "";
    $charset  = "utf8mb4";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    // DSN (Data Source Name) — cadena que describe la conexión
    // formato: motor:host=...;dbname=...;charset=...

    $opciones = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // errores como excepciones
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch como array asociativo
        PDO::ATTR_EMULATE_PREPARES   => false,                  // prepared statements reales
    ];

    try {
        $pdo = new PDO($dsn, $user, $password, $opciones);
        echo "Conexión exitosa";
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }

    //? CONSULTA SIMPLE
    $stmt = $pdo->query("SELECT * FROM empleados");
    $empleados = $stmt->fetchAll();

    foreach($empleados as $empleado){
        echo $empleado["nombre"] . "<br>";
    }

    //? PREPARED STATEMENT — para consultas con datos del usuario
    $stmt = $pdo->prepare("SELECT * FROM empleados WHERE id = :id");
    $stmt->execute([":id" => 1]);
    $empleado = $stmt->fetch();
    echo $empleado["nombre"];

?>