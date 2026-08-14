<?php

class Persona
{
    
    public string $nombre;

    protected int $edad;

    private string $password;

    public const PAIS = "México";

    public function __construct(
        string $nombre,
        int $edad,
        string $password
    ) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->password = $password;
    }

    public function mostrarDatos(): void
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "País: " . self::PAIS . "<br>";
    }
}


// Crear objeto
$persona = new Persona("Carlos", 30, "abc123");


echo $persona->nombre;
echo "<br>";


// CONSTANTE
echo Persona::PAIS;
echo "<br>";


$persona->mostrarDatos();