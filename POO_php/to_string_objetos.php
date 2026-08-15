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

    public function mostrarDatos(): void
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Password: " . $this->password . "<br>";
    }

    public function __toString()
    {
        return "mi nombre es $this->nombre y tengo $this->edad años";
    }
}
$persona1 = new Persona("Carlos", 30, "abc123");


// PUBLIC: podemos acceder directamente
echo $persona1->nombre."\n";
echo $persona1;//!con el metodo tostring dentro de la clase se puede definir como reacciona el objeto a ser tratado como un string
?>