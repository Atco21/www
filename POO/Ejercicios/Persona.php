<?php

class Persona{

    protected string $nombre;
    protected string $apellidos;


    
    public function __construct(string $nombre, string $apellidos){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    
    }


    public function getNom(): string{
        return $this->nombre;
    }

    public function setNom(string $nombre):void{
        $this->nombre = $nombre;
    }
    
    public function getApellidos(): string{
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos):void{
        $this->apellidos = $apellidos;
    }

    public function getNombreCompleto(): string{
        return $this->nombre." ".$this->apellidos;
    }



}

class Empleado extends Persona{

    public static float $sueldoTope = 3333;
    private float $sueldo;
    private array $tlfs = [];
    



    public function __construct()
    {
        $this->nombre = '';
        $this->apellidos = '';
        $this->sueldo = 0;
        $this->tlfs;
        
    }

    //Sueldo
    public function getSueldo(): float{
        return $this->sueldo;
    }
    public function setSueldo(float $sueldo): self{
        $this->sueldo = $sueldo;
        return $this;
    }

    public function debePagarImpuestos(){

        $debePagar = false; 

        if($this->sueldo >= 3333){
            $debePagar = true;
        }

        return $debePagar;

    }


    public function anyadirTelefono(int $telefono) : void {
        array_push($this->tlfs, $telefono);
    }

    public function listarTelefonos(): string{

        $numeros = "Numero: <br>";

        foreach ($this->tlfs as $numero) {
            
            $numeros .= "".$numero ."<br>";

        }

        return $numeros;

    }
    public function vaciarTelefonos(): void{

        $this->tlfs = [];

    }

    public static function toHtml(Empleado $emp): string {
    
        $res = '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Información del Empleado</title>
        </head>
        <body>';

    
        $res .= '<p>Empleado: ' . $emp->getNombreCompleto() . '<br>';
        $res .= 'Sueldo: ' . ($emp->getSueldo()) . '€</p>';

    
        $res .= '<h2>Teléfonos:</h2>';
        $res .= '<ul>';

    
        $res .= $emp->listarTelefonos();

    
        $res .= '</ul>';

    
        $res .= '</body></html>';

    
        return $res;
    }
}



$p1 = new Empleado();

$p1 -> setNom('Alfred');
$p1 -> setApellidos('Comanescu');
$p1 -> setSueldo(1200);

echo $p1 -> toHtml($p1);




?> 