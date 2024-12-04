<?php

declare(strict_types=1);

class EmpleadoConstructor8
{

    private static float $sueldoTope = 3333;

    private array $tlfs = [];

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000,
    ) {}

    //Funcionens para modificiar salario tope 
    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $nuevo): void {
        self::$sueldoTope = $nuevo;
    }



    //GETTERS Y SETTERS
    public function getSueldo(): float
    {
        return $this->sueldo;
    }
    public function setSueldo(float $sueldo): self
    {
        $this->sueldo = $sueldo;
        return $this;
    }






    //Funciones
    public function getNombreCompleto(): string
    {
        return $this->nombre . $this->apellidos;
    }

    public function debePagarImpuestos()
    {

        $debePagar = false;

        if ($this->sueldo >= self::SUELDO_TOPE) {
            $debePagar = true;
        }

        return $debePagar;
    }

    public function anyadirTelefono(int $telefono): void
    {
        array_push($this->tlfs, $telefono);
    }

    public function listarTelefonos(): string
    {

        $numeros = "Numero: <br>";

        foreach ($this->tlfs as $numero) {

            $numeros .= "" . $numero . "<br>";
        }

        return $numeros;
    }
    public function vaciarTelefonos(): void
    {

        $this->tlfs = [];
    }





    
}

$p1 = new EmpleadoConstructor8("Alfred", "Comanescu", 5000);
$p2 = new EmpleadoConstructor8("Lucas", "Duarte");

echo $p1->getNombreCompleto();
echo "<br>";
echo $p1->getSueldo();
echo "<br>";
echo $p1->debePagarImpuestos();
echo "<br>";
echo "<br>";
echo $p2->getNombreCompleto();
echo "<br>";
echo $p2->getSueldo();
echo "<br>";
echo $p2->debePagarImpuestos();