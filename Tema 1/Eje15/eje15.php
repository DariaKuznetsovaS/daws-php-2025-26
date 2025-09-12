<?php
/*15. Crea un array multidimensional llamado “diccionario” que almacene para
cada usuario su nombre, apellidos e email. A continuación crea una función
llamada “getDatos()” que reciba como primer parámetro el nombre de
usuario y como segundo parámetro el dato a obtener (“nombre”, “apellidos” o
“email”) y lo muestre por pantalla*/
$diccionario = [
    "usuario1" => [
        "nombre" => "Juan",
        "apellidos" => "Pérez Gómez",
        "email" => "juan.perez@example.com" 
    ],
    "usuario2" => [
        "nombre" => "María",
        "apellidos" => "López Sánchez",
        "email" => "maria.lopez@example.com"]
];
require 'eje15.view.php';


?>