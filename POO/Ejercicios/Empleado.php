<?php

class Empleado{

    private string $nombre;
    private string $apellidos;
    private float $sueldo;

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
}



$p1 = new Empleado();

$p1->setNombre('Alfred');
$p1->setApellidos('Comanescu');
$p1->setSueldo(1200);

echo "". $p1 ->getNombreCompleto() ."<br>";
echo "". $p1 -> debePagarImpuestos()."<br>";

?>