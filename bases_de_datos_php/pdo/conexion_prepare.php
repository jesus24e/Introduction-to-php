<?php
    $host     = "localhost";
    $db       = "test_php";
    $user     = "root";
    $password = "";
    $charset  = "utf8mb4";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    $opciones = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $password, $opciones);
        echo "conectado <br>";
    } catch(PDOException $e){
        die("error: " . $e->getMessage());
    }

    //? OPCIÓN 1 — pasar valores directo en execute (más simple)
    $stmt = $pdo->prepare("INSERT INTO empleados (nombre, apellidos, email) VALUES (?, ?, ?)");

    $stmt->execute(["jesus", "rodriguez", "jesus@gmail.com"]);
    echo "insertado con ? <br>";

    //? OPCIÓN 2 — parámetros nombrados (más legible)
    $stmt = $pdo->prepare("INSERT INTO empleados (nombre, apellidos, email) VALUES (:nombre, :apellidos, :email)");

    $stmt->execute([
        ":nombre"    => "ana",
        ":apellidos" => "garcia",
        ":email"     => "ana@gmail.com"
    ]);
    echo "insertado con parámetros nombrados <br>";

    //? OPCIÓN 3 — bindParam (similar a mysqli, más control)
    $stmt = $pdo->prepare("INSERT INTO empleados (nombre, apellidos, email) VALUES (:nombre, :apellidos, :email)");

    $nombre    = "carlos";
    $apellidos = "lopez";
    $email     = "carlos@gmail.com";

    $stmt->bindParam(":nombre",    $nombre);
    $stmt->bindParam(":apellidos", $apellidos);
    $stmt->bindParam(":email",     $email);

    $stmt->execute();
    echo "insertado con bindParam <br>";

    echo "último ID insertado: " . $pdo->lastInsertId();
?>