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

    <?php
    
    echo $_SESSION["nombreusuario"]."<br>";
    echo $_SESSION["email"]."<br>";
    echo $_SESSION["login"]."<br>";

    ?>

    <?php
    
    session_unset();
    session_destroy();
    ?>

    <?php
    
    echo $_SESSION["nombreusuario"]."<br>";
    echo $_SESSION["email"]."<br>";
    echo $_SESSION["login"]."<br>";

    ?>
</body>
</html>