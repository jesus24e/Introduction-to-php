<?php

session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $_SESSION["nombreusuario"]="jesus";
    $_SESSION["email"]="jesus@gmail.com";
    $_SESSION["login"]=true;
    echo "variables de sesion guardadas"
    ?>
</body>
</html>