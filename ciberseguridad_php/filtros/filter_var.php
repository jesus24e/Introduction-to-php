<?php

    $email = "jesus@gmail.com";

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "valido";
    }else{
        echo "invalido";
    }


?>