<?php
/*Crea dos arrays, uno con 4 tipos de animales ($animales) y otro con 4
nombres de colores ($colores).
■ Calcula el número de elementos de cada array.
■ Añade un elemento al final del array $animales utilizando una función.
■ Añade un elemento al principio del array $colores utilizando una función.
■ Crea un tercer array que incluya los elementos de los dos arrays.*/ 
$animales = ["Perro","Gato","Conejo","Oso"];
$colores =["Blanco","Negro","Marron","Gris"];

$numAnimales = count($animales);
$numColores = count($colores);


$animal = $animales[$_GET["animal"] ?? 0];
$color = $colores[$_GET["color"] ?? 0];

array_push($animales, "Loro");
array_unshift($colores, "Azul");
$dosArrays = array_merge($animales, $colores);










include 'eje13.view.php';
?>
