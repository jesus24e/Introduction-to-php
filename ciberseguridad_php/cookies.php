<?php
/*
    COOKIES — pequeños archivos que se guardan en el navegador del usuario

    *CREAR / MODIFICAR
    ?setcookie(nombre, valor, expiracion, ruta, dominio, seguro, httponly)
        nombre      nombre de la cookie
        valor       valor que almacena
        expiracion  timestamp unix — time() + segundos hasta que expire 0 = expira al cerrar el navegador
        ruta        "/" = disponible en todo el sitio
        dominio     ".midominio.com" = disponible en subdominios
        seguro      true = solo se envía por HTTPS
        httponly    true = no accesible desde JavaScript (más seguro)

    *LEER
    ?$_COOKIE["nombre"]          lee el valor de la cookie
    ?isset($_COOKIE["nombre"])   verifica si existe

    *ELIMINAR
    ?setcookie("nombre", "", time() - 3600)   expiracion en el pasado = eliminar

    *IMPORTANTE
    ?las cookies se crean en el SIGUIENTE request — no en el mismo donde se llama setcookie()
    ?deben crearse ANTES de cualquier salida HTML (como session_start())
    ?el usuario puede borrarlas o desactivarlas desde el navegador
    ?no guardar información sensible (contraseñas, datos bancarios)
    ?máximo recomendado: 4KB por cookie
*/

    //? CREAR cookie que dura 7 días
    setcookie("usuario", "Jesus", time() + (7 * 24 * 60 * 60), "/");

    //? CREAR cookie que expira al cerrar el navegador
    setcookie("temporal", "valor", 0, "/");

    //? LEER cookie
    if(isset($_COOKIE["usuario"])){
        echo "Usuario: " . $_COOKIE["usuario"];
    } else {
        echo "Cookie no encontrada";
    }

    //? MODIFICAR — mismo nombre con nuevo valor y nueva expiración
    setcookie("usuario", "Ana", time() + (7 * 24 * 60 * 60), "/");

    //? ELIMINAR — expiración en el pasado
    setcookie("usuario", "", time() - 3600, "/");

    //? VER TODAS LAS COOKIES
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
?>