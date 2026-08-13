<?php

/*
    SPLSTACK — estructura de pila (LIFO: último en entrar, primero en salir)

    *AGREGAR / QUITAR
    ?push($valor)        agrega un elemento al tope de la pila
    ?pop()               saca y devuelve el elemento del tope

    *CONSULTAR SIN MODIFICAR
    ?top()               devuelve el elemento del tope sin sacarlo
    ?bottom()            devuelve el elemento del fondo sin sacarlo

    *INFORMACIÓN
    ?count()             devuelve el número de elementos en la pila
    ?isEmpty()           devuelve true si la pila está vacía

    *RECORRER
    ?rewind()            mueve el puntero al tope (inicio de iteración)
    ?current()           devuelve el elemento actual del puntero
    ?next()              avanza el puntero al siguiente elemento
    ?valid()             devuelve true si la posición actual es válida
    ?key()               devuelve el índice actual

    *MODO DE ITERACIÓN (hereda de SplDoublyLinkedList)
    ?setIteratorMode()   define cómo se recorre la pila
    ?    SplDoublyLinkedList::IT_MODE_LIFO   recorre de tope a fondo (por defecto en pila)
    ?    SplDoublyLinkedList::IT_MODE_FIFO   recorre de fondo a tope
    ?    SplDoublyLinkedList::IT_MODE_KEEP   no elimina al iterar (por defecto)
    ?    SplDoublyLinkedList::IT_MODE_DELETE elimina cada elemento al iterar
*/

    $pila = new SplStack();

    $pila->push("1");
    $pila->push("2");
    $pila->push("3");

    echo $pila->count();

    $pila->rewind();

    while($pila->valid()){
        echo $pila->current(), PHP_EOL; // imprime 3, 2, 1 — LIFO
        $pila->next();
    }
?>