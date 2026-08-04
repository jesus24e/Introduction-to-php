<?php
    $var1 = 10;
    $var2 = 2;
    
    echo $var1 + $var2;
    echo "\n";
    echo $var1 - $var2;
    echo "\n";
    echo $var1 * $var2;
    echo "\n";
    echo $var1 / $var2;
    echo "\n";
    echo $var1 % $var2;//modulo o residuo de una division
    echo "\n";
    echo $var1 ** $var2;//potencia
    echo "\n";

    if ($var1 > $var2) {
        echo "\n";
        echo $var1, "es mayor que", $var2;
    }
    else{
        echo "\n";
        echo $var1, "es menor";
    };

    $var3 = 100;
    $var4 = "100";

    if($var3 == $var4){//valor igual
        echo "true";
    }else{
        echo "false";
    }

    if($var3 === $var4){//valor y tipo de dato igual
        echo "true";
    }else{
        echo "false";
    }
    if($var3 !== $var4){//valor y tipo de dato diferentes
        echo "true";
    }else{
        echo "false";
    }
    if($var3 <> $var4){//distintos igual que usar !=
        echo "true";
    }else{
        echo "false";
    }

    for ($a=0; $a < 10; $a++) { 
        echo $a;
    }
    for ($a=0; $a < 10; ++$a) { 
        echo $a;
    }
    
?>