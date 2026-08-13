<?php
//*con clase normal

class logConsola{
    public function log($mensaje){
        echo $mensaje;
    }
}

$obj->setlogger(new logConsola());


//*con clase anonima

$obj->setlogger(new class{
    public function log($mensaje){
        echo $mensaje;
    }
});

?>