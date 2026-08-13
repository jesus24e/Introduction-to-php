<?php
    /*
        NAMESPACE — "carpeta lógica" para organizar clases y evitar conflictos de nombres

        namespace App\Modelos;      // declaración
        class Usuario { }           // es App\Modelos\Usuario

        namespace App\Admin;
        class Usuario { }           // es App\Admin\Usuario → sin conflicto

        use App\Modelos\Usuario;             // importar
        use App\Admin\Usuario as AdminUser;  // importar con alias

        SUB-NAMESPACES — se anidan con \ igual que carpetas
        namespace Empresa\RRHH\Contratos;   // Empresa → RRHH → Contratos
        class Empleado { }                  // es Empresa\RRHH\Contratos\Empleado

        use Empresa\RRHH\Contratos\Empleado;             // importar subnamespace
        use Empresa\RRHH\Contratos\Empleado as Contrato; // con alias
    */

    namespace Empresa\RRHH;

    class Departamento{
        private string $nombre;

        public function __construct(string $nombre)
        {
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }
    }

    // sub-namespace dentro de Empresa
    namespace Empresa\RRHH\Contratos;

    class Empleado{
        private string $puesto;

        public function __construct(string $puesto)
        {
            $this->puesto = $puesto;
        }

        public function getPuesto(){
            return $this->puesto;
        }
    }

    // uso
    $depto = new \Empresa\RRHH\Departamento("Recursos Humanos");
    $empleado = new \Empresa\RRHH\Contratos\Empleado("Desarrollador");

    echo $depto->getNombre();    // Recursos Humanos
    echo $empleado->getPuesto(); // Desarrollador
?>