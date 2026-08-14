<?php

    try {
        throw new Exception("se ha producido una excepcion");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    try {
        throw new Exception("se ha producido una excepcion",220);
    } catch (Exception $e) {
        echo $e->getCode();
    }

?>