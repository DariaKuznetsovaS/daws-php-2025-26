<?php
include "Poligono.php";
use Eje3\Poligono;
class Cuadrado extends Poligono{
   public function area(){
        $area = $this->getAnchura() * $this->getAltura();
        echo "El área del cuadrado es: " .$area;
    }
}

$cuadrado1 = new Cuadrado("rojo",10,5);

$cuadrado1-> area();