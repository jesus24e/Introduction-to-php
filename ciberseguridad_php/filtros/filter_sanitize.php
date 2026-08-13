<?php

    $decimal = 2.32;

    echo filter_var($decimal,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);


?>