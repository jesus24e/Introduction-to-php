<?php

    $primera = 10;
    $segunda = 20;
    
    if($primera=10 && $segunda <= 20){
        echo "se cumple ambas";
    }else{
        echo "almenos una es falsa";
    }
    $primera = "10";
    $segunda = 30;
    
    if($primera===10 || $segunda <= 20){
        echo "se cumple al menos una";
    }else{
        echo "ambas son falsas";
    }



?>