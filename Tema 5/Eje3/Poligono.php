<?php
namespace Eje3;
//Clase abstracta
abstract class Poligono{
    private $color;
    private $altura;
    private $anchura;

public function __construct($color, $altura, $anchura){
    $this->color=$color;
    $this->altura=$altura;
    $this->anchura=$anchura;
}

public function getColor(){
    return $this->color;
}
public function setColor($color):void{
    $this->color=$color;
}

public function getAltura(){
    return $this->altura;
}
public function setAltura($altura):void{
    $this->altura=$altura;
}

public function getAnchura(){
    return $this->anchura;
}
public function setAnchura($anchura):void{
    $this->anchura=$anchura;
}
//Añado el método abstracto para calcular el area, el que luego van a implementar los "hijos" de la clase abstracta
abstract public function area ();
}






?>