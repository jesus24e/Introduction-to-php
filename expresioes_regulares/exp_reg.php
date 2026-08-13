<?php

    $string = "https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2022-40512";
    $pattern = "/cve-\b/i"; 

    if(preg_match($pattern,$string)){
        echo "el patron se encontro en la cadena.";
    }else{
        echo "el patron no se encontro.";
    }


    $email = "example@gmail.com";
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    if(preg_match($pattern,$email)){
        echo "la direccion es valida";
    }else{
        echo "direccion invalida";
    }


/*
    EXPRESIONES REGULARES (RegEx) — patrones para buscar y validar texto
    uso: preg_match('/patron/', $texto)

    *DELIMITADORES
    ?/patron/           delimitadores más comunes
    ?#patron#           alternativa válida

    *MODIFICADORES (van después del cierre /)
    ?i                  ignora mayúsculas y minúsculas
    ?m                  multilínea — ^ y $ aplican por línea
    ?s                  el punto . también coincide con saltos de línea
    ?D                  el $ no acepta salto de línea al final

    *ANCLAS
    ?^                  inicio del string
    ?$                  fin del string
    ?\b                 límite de palabra

    *CUANTIFICADORES
    ?*                  0 o más veces
    ?+                  1 o más veces
    ??                  0 o 1 vez (opcional)
    ?{n}                exactamente n veces
    ?{n,}               n o más veces
    ?{n,m}              entre n y m veces

    *CLASES DE CARACTERES
    ?[abc]              cualquier carácter dentro del corchete (a, b o c)
    ?[^abc]             cualquier carácter excepto los del corchete
    ?[a-z]              cualquier letra minúscula
    ?[A-Z]              cualquier letra mayúscula
    ?[0-9]              cualquier dígito
    ?[a-zA-Z0-9]        letra o dígito

    *METACARACTERES
    ?.                  cualquier carácter excepto salto de línea
    ?\d                 dígito [0-9]
    ?\D                 no dígito
    ?\w                 letra, dígito o guión bajo [a-zA-Z0-9_]
    ?\W                 no \w
    ?\s                 espacio, tab, salto de línea
    ?\S                 no espacio

    *GRUPOS
    ?(abc)              grupo de captura
    ?(?:abc)            grupo sin captura
    ?(?=abc)            lookahead — seguido de abc
    ?(?!abc)            negative lookahead — NO seguido de abc

    *ALTERNANCIA
    ?a|b                a o b

    *PATRONES COMUNES
    ? /^[a-zA-Z]+$/                      solo letras
    ? /^\d+$/                            solo números
    ? /^\w+$/                            letras, números y guión bajo
    ? /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/    email
    ? /^https?:\/\/.+$/                  URL con http o https
    ? /^\d{10}$/                         teléfono 10 dígitos
    ? /^\d{4}-\d{2}-\d{2}$/             fecha formato YYYY-MM-DD
    ? /^(?=.*[A-Z])(?=.*\d).{8,}$/      contraseña: mín 8 chars, 1 mayúscula, 1 número
    ? /^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/   color hexadecimal
    ? /^[\w\-\.]+\.(jpg|jpeg|png|gif|pdf)$/i  extensión de archivo
*/
?>