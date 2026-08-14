<?php
    require_once __DIR__ . '/../../vendor/autoload.php';
    
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $db = $client->selectDatabase("database");

    $colecciones = [
    "collection" => $db->selectCollection("collection"),
    ];

    $document = array(
        [
        "name"=>"user1",
        "age"=>22,
        "email"=>"u1@gmail.com"
        ],
        [
        "name"=>"user2",
        "age"=>32,
        "email"=>"u2@gmail.com"
        ]
    );
    
    /*
        MÉTODOS DE COLLECTION EN MONGODB

        *INSERT — insertar documentos
        ?insertOne($documento)          inserta un documento
        ?insertMany([$doc1, $doc2])     inserta múltiples documentos

        *FIND — leer documentos
        ?findOne($filtro)               devuelve el primer documento que coincide
        ?find($filtro)                  devuelve todos los que coinciden (cursor)
        ?find($filtro, ["limit" => 5])  con opciones de proyección, orden, límite

        *UPDATE — actualizar documentos
        ?updateOne($filtro, $update)    actualiza el primer documento que coincide
        ?updateMany($filtro, $update)   actualiza todos los que coinciden
        ?replaceOne($filtro, $nuevo)    reemplaza el documento completo

        *DELETE — eliminar documentos
        ?deleteOne($filtro)             elimina el primer documento que coincide
        ?deleteMany($filtro)            elimina todos los que coinciden

        *CONTAR
        ?countDocuments($filtro)        cuenta los documentos que coinciden
        ?estimatedDocumentCount()       estimado rápido del total de documentos

        *AGREGACIÓN
        ?aggregate($pipeline)           operaciones avanzadas (group, sum, avg...)

        *ÍNDICES
        ?createIndex($campo)            crea un índice para mejorar búsquedas
        ?dropIndex($nombre)             elimina un índice
        ?listIndexes()                  lista todos los índices

        *OTROS
        ?drop()                         elimina la colección completa
        ?distinct($campo, $filtro)      devuelve valores únicos de un campo
        ?bulkWrite([$operaciones])      ejecuta múltiples operaciones a la vez

        EJEMPLOS RÁPIDOS:
        ?$col->findOne(["name" => "jesus"]);
        ?$col->updateOne(["name" => "jesus"], ['$set' => ["age" => 25]]);
        ?$col->deleteOne(["name" => "jesus"]);
        ?$col->countDocuments(["age" => ['$gt' => 18]]);
    */

    
    echo $colecciones["collection"]->insertMany($document)?"correcto":"";

    $cursor = $colecciones["collection"]->find(["age" => ['$gt' => 28]]);

    foreach($cursor as $doc){
        echo "<br>".$doc["name"];
        echo "<br>".$doc["age"];
        echo "<br>".$doc["email"];
    }

?>