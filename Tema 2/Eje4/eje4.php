04. Crea una pantalla de login con dos campos:
usuario y contraseña. El programa deberá
validar los datos de acceso contra un diccionario
de datos como el de la imagen. El programa
deberá mostrar un mensaje de bienvenida con
su nombre y apellidos en caso de que los datos
sean correctos.
También indicará si el usuario introducido no
existe o si la contraseña introducida es
incorrecta.

<?php
function saludar($nombre, $apellidos){
    return "Hola, " .$nombre ." " .$apellidos;
}



function validarDatos($usuario, $password, $diccionario){

    if(array_key_exists($usuario, $diccionario)){
        if($diccionario[$usuario]["password"]===$password){
            $nombre = $diccionario[$usuario]["nombre"];
            $apellidos = $diccionario[$usuario]["apellidos"];
        return saludar($nombre, $apellidos);    
        } else {
            return "La contraseña es incorrecta";
        }
        
    } else return "El usuario no existe";
}
$diccionario = [
    "user1" => [
        "nombre" => 'Ane',
        "apellidos" => 'López',
        "password" => '1234Abcd'
    ],
    "user2" => [
        "nombre" =>  'Amaia',
        "apellidos" => 'Otsoa',
        "password" => '123Abc'
    ]
    ];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$mensaje = validarDatos($usuario, $password, $diccionario);



include "eje4.view.php"
?>