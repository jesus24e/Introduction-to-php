<?php
    require_once __DIR__ . '/../../vendor/autoload.php';
    
    $client = new MongoDB\Client("mongodb://localhost:27017");

    try {
        $client->listDatabases();
        echo "Conexión exitosa ✅";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>
<?php
/*
    !INSTALACIÓN DE MONGODB PARA PHP (Windows + XAMPP)

    *1. INSTALAR MONGODB COMMUNITY SERVER
    ?   Descarga el instalador MSI desde:
    ?   https://www.mongodb.com/try/download/community
    ?   Durante la instalación marca "Install MongoD as a Service"

    *2. INSTALAR LA EXTENSIÓN PHP PARA MONGODB
    ?   Ve a: https://pecl.php.net/package/mongodb
    ?   Haz click en "DLL" de la versión más reciente
    ?   Descarga según tu configuración (verificar en phpinfo()):
    ?       - PHP 8.2 Thread Safe (TS) x64  →  php_mongodb-x.x.x-8.2-ts-vs16-x64.zip
    ?   Extrae el ZIP y copia "php_mongodb.dll" a: C:\xampp\php\ext\
    ?   Abre php.ini (XAMPP → Config → PHP) y agrega:
    ?       extension=mongodb
    ?   Reinicia Apache desde el panel de XAMPP
    ?   Verifica en phpinfo() que aparezca la sección "mongodb" con "enabled"

    *3. INSTALAR LA LIBRERÍA PHP CON COMPOSER
    ?   Abre CMD en la carpeta de tu proyecto y ejecuta:
    ?       composer require mongodb/mongodb
    ?   Esto crea la carpeta vendor/ con la librería lista para usar

    *4. ALTERNATIVA EN LA NUBE — MONGODB ATLAS (sin instalar nada local)
    ?   Crea cuenta en: https://www.mongodb.com/atlas
    ?   Crea un cluster gratuito (M0 Free — 512MB)
    ?   En "Network Access" agrega tu IP o 0.0.0.0/0
    ?   Obtén tu cadena de conexión:
    ?       mongodb+srv://usuario:password@cluster0.xxxxx.mongodb.net/

    *5. CONEXIÓN EN PHP
    ?   local:  $client = new MongoDB\Client("mongodb://localhost:27017");
    ?   Atlas:  $client = new MongoDB\Client("mongodb+srv://usuario:password@cluster0.xxxxx.mongodb.net/");
*/
?>