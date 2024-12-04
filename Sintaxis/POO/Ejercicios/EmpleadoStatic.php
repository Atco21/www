<?php

declare(strict_types=1);

class EmpleadoStatic
{
    private static float $sueldoTope = 3333;
    private array $tlfs = [];

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000,
    ) {}

    //Funciones para modificar salario tope 
    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $nuevo): void {
        self::$sueldoTope = $nuevo;
    }

    // GETTERS Y SETTERS
    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): self {
        $this->sueldo = $sueldo;
        return $this;
    }

    // Funciones
    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo >= self::$sueldoTope;
    }

    public function anyadirTelefono(int $telefono): void {
        array_push($this->tlfs, $telefono);
    }

    
    public function getTelefonos(): array {
        return $this->tlfs;
    }

    public function vaciarTelefonos(): void {
        $this->tlfs = [];
    }


    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self {
        $this->apellidos = $apellidos;
        return $this;
    }


    public static function toHtml(EmpleadoStatic $emp): string {
    
        $res = '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Información del Empleado</title>
        </head>
        <body>';

    
        $res .= '<p>Empleado: ' . htmlspecialchars($emp->getNombreCompleto()) . '<br>';
        $res .= 'Sueldo: ' . ($emp->getSueldo()) . '€</p>';

    
        $res .= '<h2>Teléfonos:</h2>';
        $res .= '<ul>';

    
        foreach ($emp->getTelefonos() as $telefono) {
            $res .= '<li>' . ($telefono) . '</li>';
        }

    
        $res .= '</ul>';

    
        $res .= '</body></html>';

    
        return $res;
    }
}

$p1 = new EmpleadoStatic("Alfred", "Comanescu", 5000);
$p2 = new EmpleadoStatic("Lucas", "Duarte");

$p1->anyadirTelefono(123456789);
$p1->anyadirTelefono(987654321);

echo EmpleadoStatic::toHtml($p1);

?>
