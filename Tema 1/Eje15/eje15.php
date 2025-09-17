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
//Falta una función que reciba el nombre de usuario y el dato
$dato = $_GET['dato'] ?? null;
$usuario = $_GET['usuario'] ?? null;
function getDatos($usuario, $dato){
    global $diccionario; // Acceder a la variable global $diccionario
    if(isset($diccionario[$usuario]) && isset($diccionario[$usuario][$dato])){
        return $diccionario[$usuario][$dato];
    } else {
        return "El usuario o dato no existe.";
    }
}
/*function getDatos($diccionario, $usuario, $dato){
echo $diccionario[$usuario][$dato];
}*/

require 'eje15.view.php';


?>