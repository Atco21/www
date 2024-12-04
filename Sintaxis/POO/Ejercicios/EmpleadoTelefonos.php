<?php

class EmpleadoTelefonos{

    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private array $tlfs = [];
    


    public function __construct()
    {
        $this->nombre = '';
        $this->apellidos = '';
        $this->sueldo = 0;
        $this->tlfs;
        
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
}



$p1 = new EmpleadoTelefonos();

$p1 -> setNombre('Alfred');
$p1 -> setApellidos('Comanescu');
$p1 -> setSueldo(1200);

echo "". $p1 ->getNombreCompleto() ."<br>";
echo "". $p1 ->anyadirTelefono(123465798);
echo "". $p1 ->anyadirTelefono(987654321);
echo "". $p1 -> listarTelefonos();
echo "". $p1 -> vaciarTelefonos();
echo "". $p1 -> listarTelefonos();


?>