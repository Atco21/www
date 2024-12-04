<?php
// class Punto {
//     protected float $x;
//     protected float $y;
//     protected float $z;

//     public function __construct(float $x = 0.0, float $y = 0.0,float $z = 0.0) {
//         $this->x = $x;
//         $this->y = $y;
//         $this->z = $z;
//     }
// }

// class Producto {
//     const IVA = 0.23;
//     private static $numProductos = 0; 

//     public static function nuevoProducto() {
//         self::$numProductos++;
//     }
//     public static function mostrar(){
//         return self::$numProductos;
//     }
// }


// Producto::nuevoProducto();
// Producto::nuevoProducto();
// Producto::nuevoProducto();
// Producto::nuevoProducto();
// $valor = Producto::mostrar();

// echo $valor;
// $impuesto = Producto::IVA;

// class Producto {
//     private string $codigo;

//     public function __construct(string $codigo) {
//         $this->codigo = $codigo;
//     }

//     public function mostrarResumen() {
//         echo "<p>Prod:".$this->codigo."</p>";
//     }
// }

// class Tv extends Producto {
//     private $pulgadas;
//     private $tecnologia;

//     public function __construct(string $codigo, int $pulgadas, string $tecnologia) {
//         parent::__construct($codigo);
//         $this->pulgadas = $pulgadas;
//         $this->tecnologia = $tecnologia;
//     }

//     public function mostrarResumen() {
//         parent::mostrarResumen();
//         echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
//     }
// }


// $p=new Producto("roomba");
// $p->mostrarResumen();


// $t=new TV("samsung",55,"oled");
// $t->mostrarResumen();

class ClasePadre
{
    protected $protegida = 'Protegida';
    private $privada = 'Privada';

     function imprime_las_propiedades() {
        echo $this->protegida . ", " . $this->privada;
        echo "<br>";
    }
}

$obj = new ClasePadre();

$obj->imprime_las_propiedades();


class ClaseHijo extends ClasePadre
{

    function imprime_las_propiedades() {
        echo $this->protegida . ", " ; //$this->privada;  //la variable private da un error
        echo "<br>";
    }
}

$obj2 = new ClaseHijo();

$obj2->imprime_las_propiedades();


