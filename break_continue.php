<?php

    $letters = array("a","b","c");

    foreach($letters as $letter){
        if($letter == "a"){
            continue;
            echo "el continue evitara que se imprima esto y pasara a la siguiente iteracion del bucle";
        }

        echo $letter."<br>";
    }

?>