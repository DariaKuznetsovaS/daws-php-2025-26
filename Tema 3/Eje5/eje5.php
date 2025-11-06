<?php
/*05. Desarrolla una página de login con un formulario compuesto por los campos de usuario
y contraseña. La aplicación no dejará continuar hasta que se inicie sesión con un nombre de
usuario y contraseña correctos (a comprobar contra un array asociativo). Una vez el usuario
haya accedido correctamente, en lugar del formulario de acceso la aplicación mostrará un
mensaje de bienvenida y un enlace para cerrar sesión. Al hacer click en el enlace para cerrar
sesión, la aplicación destruirá información de la sesión almacenada. */
session_start();
$usuarios  = [
    "Dasha" => "1234",
    "David" => "4567"
];
//Para los 3 intentos fallidos: 

if(!isset($_SESSION['intentos'])){
    $_SESSION['intentos']=0;
}

if(isset($_GET['salir'])){
    session_destroy();
}
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SESSION['intentos'] < 3) {
    $usuario = $_POST['usuario'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $pass) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['intentos'] = 0; // reiniciar intentos al loguearse bien
    } else {
        $_SESSION['intentos']++;
        $error = "Usuario o contraseña incorrectos. Intento {$_SESSION['intentos']} de 3.";
    }
}


require "eje5.view.php"
?>