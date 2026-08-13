<?php

/*
    SPLQUEUE — estructura de cola (FIFO: primero en entrar, primero en salir)

    *AGREGAR / QUITAR
    ?enqueue($valor)     agrega un elemento al final de la cola
    ?dequeue()           saca y devuelve el elemento del frente

    *CONSULTAR SIN MODIFICAR
    ?bottom()            devuelve el primer elemento (frente) sin sacarlo
    ?top()               devuelve el último elemento (fondo) sin sacarlo

    *INFORMACIÓN
    ?count()             devuelve el número de elementos en la cola
    ?isEmpty()           devuelve true si la cola está vacía

    *RECORRER
    ?rewind()            mueve el puntero al inicio
    ?current()           devuelve el elemento actual del puntero
    ?next()              avanza el puntero al siguiente elemento
    ?valid()             devuelve true si la posición actual es válida
    ?key()               devuelve el índice actual

    *MODO DE ITERACIÓN (hereda de SplDoublyLinkedList)
    ?setIteratorMode()   define cómo se recorre la cola
    ?    SplDoublyLinkedList::IT_MODE_FIFO   recorre de frente a fondo (por defecto)
    ?    SplDoublyLinkedList::IT_MODE_LIFO   recorre de fondo a frente
    ?    SplDoublyLinkedList::IT_MODE_KEEP   no elimina al iterar (por defecto)
    ?    SplDoublyLinkedList::IT_MODE_DELETE elimina cada elemento al iterar
*/

    $cola = new SplQueue();

    $cola->enqueue("1");
    $cola->enqueue("2");
    $cola->enqueue("3");

    echo $cola->count();
    
    $cola->rewind();

    while($cola->valid()){
        echo $cola->current(), PHP_EOL;
        $cola->next();
    }
?>