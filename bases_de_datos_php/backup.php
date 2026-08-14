<?php
$host     = "localhost";
$user     = "root";
$password = "";
$db       = "test_php";

$connection = mysqli_connect($host, $user, $password, $db);

if(!$connection){
    die("error al conectar: " . mysqli_connect_error());
}

// obtener todos los registros
$query  = "SELECT * FROM empleados";
$result = mysqli_query($connection, $query);

// construir el contenido del backup
$backup = "-- Backup de $db\n";
$backup .= "-- Fecha: " . date("Y-m-d H:i:s") . "\n\n";

while($row = mysqli_fetch_row($result)){
    $valores = array_map(fn($v) => "'" . mysqli_real_escape_string($connection, $v) . "'", $row);
    $backup .= "INSERT INTO empleados VALUES (" . implode(", ", $valores) . ");\n";
}

// forzar descarga del archivo
header("Content-Disposition: attachment; filename=backup_$db.sql");
header("Content-Type: application/octet-stream");
echo $backup;

mysqli_close($connection);
?>