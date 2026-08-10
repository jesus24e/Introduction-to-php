<?php
    $var1 = 10;
    $var2 = "10";

    if($var1 === $var2){
        echo "ambas variables tienen el mismo valor y tipo de dato";
    }elseif($var1 == $var2 && (is_string($var1)||is_string($var2))){
        echo "ambas variables tienen el mismo valor pero una de las dos es de tipo string";
    }else{
        echo "las variables son diferentes en valor";
    }
    
?>