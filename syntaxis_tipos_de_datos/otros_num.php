<?php

    $var1 = 24;
    var_dump(is_finite($var1));
    
    $var2 = 1.8e956;
    var_dump(is_finite($var2));
    
    $variable1 = acos(8);
    var_dump(is_nan($variable1));

    $telefono = "5535503879";
    var_dump(is_numeric($telefono));

    $number = 12.6;
    $int_cast = (int)$number;
    echo($int_cast);

?>