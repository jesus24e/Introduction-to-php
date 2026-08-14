<?php

class Persona
{
    // Atributos
    private string $nombre;
    private int $edad;

    // Constructor
    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método
    public function saludar(): string
    {
        return "Hola, mi nombre es " . $this->nombre;
    }

    // Otro método
    public function esMayorDeEdad(): bool
    {
        return $this->edad >= 18;
    }
}

// Crear un objeto
$persona = new Persona("Carlos", 25);

// Usar los métodos
echo $persona->saludar();
echo "<br>";

if ($persona->esMayorDeEdad()) {
    echo "Es mayor de edad.";
} else {
    echo "Es menor de edad.";
}