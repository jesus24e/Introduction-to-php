<?php
    // primero comprobamos quien es
    $username = $_SERVER['REMOTE_USER']; // usando un mecanismo de autenticación básico

    // establecemos dónde y qué queremos enviar al servidor
    $userfile  = $_POST['user_submitted_filename'];
    $homedir   = "/home/$username";
    $filepath  = "$homedir/$userfile";

    // validamos el username — solo letras y números
    if(!ctype_alnum($username)){
        die("nombre de usuario incorrecto");
    }

    // validamos el nombre del archivo con regex
    // acepta: letras, números, guión, guión bajo, puntos simples
    // rechaza: espacios, .., /, caracteres especiales
    if(!preg_match('/^(?:[a-z0-9_-]|\.(?!\.))+$/iD', $userfile)){
        die("nombre de archivo incorrecto");
    }

    // si pasa ambas validaciones el archivo es seguro de usar
    echo "Usuario: $username <br>";
    echo "Archivo: $userfile <br>";
    echo "Ruta completa: $filepath <br>";
?>