<?php

class EmpleadoTelefonos{

    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private array $tlfs;
    


    public function __construct($nombre, $apellidos, $sueldo, $tlfs)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
        $this->tlfs = $tlfs;
        
    }

    //Nombre
    public function getNombre(): string{
        return $this->nombre;
    }
    public function setNombre(string $nombre): self{
        $this->nombre = $nombre;
        return $this;
    }

    //Apellidos
    public function getApellidos(): string{
        return $this->apellidos;
    }
    public function setApellidos(string $apellidos): self{
        $this->apellidos = $apellidos;
        return $this;
    }


    //Sueldo
    public function getSueldo(): float{
        return $this->sueldo;
    }
    public function setSueldo(float $sueldo): self{
        $this->sueldo = $sueldo;
        return $this;
    }


    public function getNombreCompleto(): string{
        return $this->nombre . $this-> apellidos;
    }

    public function debePagarImpuestos(){

        $debePagar = false; 

        if($this->sueldo >= 3333){
            $debePagar = true;
        }

        return $debePagar;

    }

   
    public function getTlfs(): array
    {
        return $this->tlfs;
    }
    public function setTlfs(array $tlfs): self
    {
        $this->tlfs = $tlfs;

        return $this;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->tlfs[] += $telefono;
    }

    public function listarTelefonos(): string{

        $numeros = "";

        foreach ($$tlfs as $numero) {
            
            $numeros += $numero .", ";

        }

        return $numeros;

    }
    public function vaciarTelefonos(): void{

        $tlfs = [];

    }
}



$p1 = new EmpleadoTelefonos("Alfred", "Comanescu", 1200, 123456789);

echo "". $p1 ->getNombreCompleto() ."<br>";
echo "". $p1 -> listarTelefonos();
echo "". $pi ->

?>