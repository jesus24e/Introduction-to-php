<?php

require_once "format.php";
require_once "db.php";


$query = "select * from productos";
$result = "";

try {
    $result = mysqli_query($connection,$query);
    echo "consulta exitosa.";
} catch (Exception $e) {
    echo "error en la consulta: ".$e->getMessage();
}

$product = mysqli_fetch_assoc($result)["nombre"];

$db_text = formatString($product);

echo $db_text;
?>