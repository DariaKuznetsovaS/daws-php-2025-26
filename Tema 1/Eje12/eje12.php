<?php
/*12. Crea un array con 4 nombres de ciudades (Paris, Berlin, Amsterdam, Praga). A
continuación crea las siguientes funciones:
● getValor($array, $posicion) : recibe un número como parámetro y
devuelve el valor almacenado en el array en dicho índice.
● setValor($array, $posicion, $valor) : establece el valor del
elemento indicado en la posición y devuelve el array.
Crea algunos ejemplos con llamadas a las dos funciones.*/ 
$ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];
function getValor($array, $posicion){
    return $array[$posicion];
}
function setValor($array, $posicion, $valor){
    $array[$posicion] = $valor;
    return $array;
}

$ciudad =$_GET["ciudad"] ?? 0;
$resultadoGet = getValor($ciudades, $ciudad);
$posicion =$_GET["posicion"] ?? 0;

$nuevoValor =$_GET["nuevoValor"] ?? "Nueva Ciudad";
$resultadoSet = setValor($ciudades, $posicion, $nuevoValor);

echo "ciudad en a posicion 1: " .getValor($ciudades, 1) . "<br>";
echo "El valor obtenido es: $resultadoGet <br>";
echo "El array modificado es: ";
print_r($resultadoSet);

include 'eje12.view.php';



?>