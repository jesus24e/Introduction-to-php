<?php
    require_once __DIR__ . '/../../vendor/autoload.php';
    
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $db = $client->selectDatabase("database");

    $colecciones = [
    "collection" => $db->selectCollection("collection"),
    ];

    /*
    OPERADORES DE MONGODB EN PHP

    *COMPARACIÓN
    ?$gt    mayor que            ["age" => ['$gt'  => 18]]
    ?$gte   mayor o igual que    ["age" => ['$gte' => 18]]
    ?$lt    menor que            ["age" => ['$lt'  => 18]]
    ?$lte   menor o igual que    ["age" => ['$lte' => 18]]
    ?$eq    igual a              ["age" => ['$eq'  => 18]]
    ?$ne    diferente de         ["age" => ['$ne'  => 18]]
    ?$in    dentro de un array   ["age" => ['$in'  => [18, 20, 25]]]
    ?$nin   fuera de un array    ["age" => ['$nin' => [18, 20, 25]]]

    *LÓGICOS
    ?$and   todas las condiciones ["'$and'" => [["age" => ['$gt' => 18]], ["name" => "jesus"]]]
    ?$or    alguna condición      ["'$or'"  => [["age" => 18], ["age" => 25]]]
    ?$not   niega la condición    ["age" => ['$not' => ['$gt' => 18]]]
    ?$nor   ninguna condición     ["'$nor'" => [["age" => 18], ["name" => "jesus"]]]
    */


    $cursor = $colecciones["collection"]->find(["age" => ['$gt' => 28]]);

    foreach($cursor as $doc){
        echo "<br>".$doc["name"];
        echo "<br>".$doc["age"];
        echo "<br>".$doc["email"];
    }

?>