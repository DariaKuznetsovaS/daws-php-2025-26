<?php
/* 17. Crea una función que reciba un usuario y contraseña mediante GET. La
aplicación deberá mostrar si el usuario existe, y en caso de existir si la contraseña
recibida es correcta. La validación se realizará contra un array multidimensional
como el siguiente:
*/

$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];

function validar($usuario, $contrasena){
    $diccionario = [
        "usuario1" => ["nombre" => "admin",
         "contrasena" => "1234",
        "email" => "admin@example.com"],
        
        "usuario2" => ["nombre" => "pepe",
         "contrasena" => "abcd",
        "email" => "pepe@example.com"]

    ];
    
    
    if($usuario == $diccionario["usuario1"]["nombre"]){
        if($contrasena == $diccionario["usuario1"]["contrasena"]){
            return "El usuario $usuario existe y la contraseña es correcta.";
        } else {
            return "El usuario $usuario existe pero la contraseña es incorrecta.";
        }
    } elseif($usuario == $diccionario["usuario2"]["nombre"]){
        if($contrasena == $diccionario["usuario2"]["contrasena"]){
            return "El usuario $usuario existe y la contraseña es correcta.";
        } else {
            return "El usuario $usuario existe pero la contraseña es incorrecta.";
        }
    } else {
        return "El usuario $usuario no existe.";
    }
}
require 'eje17.view.php';
?>