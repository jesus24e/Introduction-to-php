<?php

class Persona
{
    // PUBLIC: se puede acceder desde cualquier lugar
    public string $nombre;

    // PROTECTED: se puede acceder desde esta clase
    // y desde las clases que hereden de ella
    protected int $edad;

    // PRIVATE: solamente se puede acceder desde esta clase
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
}


// CLASE HIJA
class Empleado extends Persona
{
    public function mostrarEdad(): void
    {
        // PROTECTED: funciona porque Empleado hereda de Persona
        echo "Edad: " . $this->edad . "<br>";
    }

    public function cambiarPassword(): void
    {
        // PRIVATE: NO funciona aquí
        // $this->password = "123456";

        echo "No puedo acceder directamente a password porque es private.";
    }
}


// CREAR OBJETO
$empleado = new Empleado("Carlos", 30, "abc123");


// PUBLIC: podemos acceder directamente
echo $empleado->nombre;
echo "<br>";


// PROTECTED: NO podemos acceder directamente desde fuera
// echo $empleado->edad;


// PRIVATE: NO podemos acceder directamente desde fuera
// echo $empleado->password;


// Pero podemos utilizar un método PUBLIC
// que está dentro de Persona
$empleado->mostrarDatos();

echo "<br>";


// La clase hija sí puede acceder a protected
$empleado->mostrarEdad();

?>