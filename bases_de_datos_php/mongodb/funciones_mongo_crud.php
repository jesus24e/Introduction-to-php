<?php
    require_once __DIR__ . '/../../vendor/autoload.php';
    
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $db = $client->selectDatabase("database");

    $col = $db->selectCollection("collection");

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

    //? INSERT MANY — insertar múltiples documentos
    $col->insertMany($document);
    echo "insertMany: correcto <br><br>";

    //? INSERT ONE — insertar un documento
    $col->insertOne(["name" => "user3", "age" => 27, "email" => "u3@gmail.com"]);
    echo "insertOne: correcto <br><br>";

    //? FIND — leer todos los documentos con filtro
    echo "find (age > 28): <br>";
    $cursor = $col->find(["age" => ['$gt' => 28]]);
    foreach($cursor as $doc){
        echo $doc["name"] . " — " . $doc["age"] . " — " . $doc["email"] . "<br>";
    }

    //? FIND ONE — leer el primer documento que coincide
    echo "<br>findOne (name = user1): <br>";
    $doc = $col->findOne(["name" => "user1"]);
    echo $doc["name"] . " — " . $doc["age"] . " — " . $doc["email"] . "<br>";

    //? UPDATE ONE — actualizar un documento
    $col->updateOne(
        ["name" => "user1"],
        ['$set' => ["age" => 99]]
    );
    echo "<br>updateOne: user1 age actualizado a 99 <br>";

    //? UPDATE MANY — actualizar múltiples documentos
    $col->updateMany(
        ["age" => ['$lt' => 30]],
        ['$set' => ["status" => "joven"]]
    );
    echo "updateMany: status 'joven' agregado a menores de 30 <br>";

    //? REPLACE ONE — reemplaza el documento completo
    $col->replaceOne(
        ["name" => "user3"],
        ["name" => "user3_reemplazado", "age" => 40, "email" => "u3new@gmail.com"]
    );
    echo "replaceOne: user3 reemplazado <br>";

    //? COUNT — contar documentos
    $total = $col->countDocuments([]);
    $mayores = $col->countDocuments(["age" => ['$gt' => 28]]);
    echo "<br>total documentos: $total <br>";
    echo "mayores de 28: $mayores <br>";

    //? DELETE ONE — eliminar un documento
    $col->deleteOne(["name" => "user3_reemplazado"]);
    echo "<br>deleteOne: user3_reemplazado eliminado <br>";

    //? DELETE MANY — eliminar múltiples documentos
    $col->deleteMany(["age" => ['$gt' => 90]]);
    echo "deleteMany: documentos con age > 90 eliminados <br>";

    //? DISTINCT — valores únicos de un campo
    $edades = $col->distinct("age", []);
    echo "<br>distinct ages: " . implode(", ", $edades) . "<br>";
?>