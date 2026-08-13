<?php
    $host    = "localhost";
    $db      = "test_php";
    $user    = "root";
    $password = "";
    $charset = "utf8mb4";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    $opciones = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $password, $opciones);
        echo "Conexión exitosa <br>";
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }

    //? CREAR TABLA
    try {
        $pdo->exec("CREATE TABLE IF NOT EXISTS productos (
            id        int(6) unsigned auto_increment primary key,
            nombre    varchar(50) not null,
            precio    decimal(10,2) not null,
            reg_date  timestamp default current_timestamp
        )");
        echo "Tabla lista <br>";
    } catch (PDOException $e) {
        die("Error al crear tabla: " . $e->getMessage());
    }

    //? INSERTAR REGISTRO con prepared statement
    try {
        $stmt = $pdo->prepare("INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)");

        $stmt->execute([
            ":nombre" => "Teclado",
            ":precio" => 299.99
        ]);

        echo "Registro insertado. ID: " . $pdo->lastInsertId() . "<br>";
    } catch (PDOException $e) {
        die("Error al insertar: " . $e->getMessage());
    }

    //? VERIFICAR — leer el registro insertado
    $stmt = $pdo->query("SELECT * FROM productos");
    $productos = $stmt->fetchAll();

    foreach($productos as $producto){
        echo $producto["id"] . " — " . $producto["nombre"] . " — $" . $producto["precio"] . "<br>";
    }
?>