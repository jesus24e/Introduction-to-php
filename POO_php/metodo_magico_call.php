<?php

class Persona
{
    public string $nombre;
    protected int $edad;
    private string $password;

    public function __construct(string $nombre, int $edad, string $password)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->password = $password;
    }

    public function __call(string $metodo, array $argumentos)
    {

        $no_method = true;
        $method_name = substr($metodo,0,3);

        if($method_name == "get"){
            $no_method = false;
            $realName = substr($metodo,3);
            return $this->$realName."\n";
        }

        if($no_method){
            echo "el metodo '$metodo' no existe en esta clase<br>";
            echo "argumentos recibidos: " . implode(", ", $argumentos) . "<br>";
        }
        
    }

    public function mostrarDatos(): void
    {
        echo "Nombre: " . $this->nombre . "\n";
        echo "Edad: " . $this->edad . "\n";
        echo "Password: " . $this->password . "\n";
    }

    public function __toString()
    {
        return "mi nombre es $this->nombre y tengo $this->edad años";
    }
}

$persona1 = new Persona("Carlos", 30, "abc123");

$persona1->mostrarDatos();                        
echo $persona1->getpassword();
?>