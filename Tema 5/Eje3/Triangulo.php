<?php
require "Poligono.php";
use Eje3\Poligono;
class Triangulo extends Poligono{
   public function area(){
        $area = $this->getAnchura() * $this->getAltura() * 0.5;
     echo "El área del triangulo es: " .$area;
    }

}
$triangulo1= new Triangulo("amarillo", 13, 20);
$triangulo1 -> area();
