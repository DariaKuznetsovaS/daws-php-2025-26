<?php
session_start();

$usuarios = [
    ["user" => "Dasha", "pass" => "1234"],
    ["user" => "David", "pass" => "4567"]
];

// Si ya hay usuario logueado, mostrar welcome
if (isset($_SESSION['usuario'])) {
    require "eje5.view.welcome.php";
} else {
    // Si se envió formulario de login
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user = $_POST['user'] ?? "";
        $pass = $_POST['pass'] ?? "";

        if (comprobarLogin($user, $pass, $usuarios)) {
            $_SESSION['usuario'] = $user;
            require "eje5.view.welcome.php";
        } else {
            $error = "Usuario o contraseña incorrectos";
            require "eje5.view.login.php";
        }
    } else {
        // Mostrar formulario de login vacío
        require "eje5.view.login.php";
    }
}

function comprobarLogin($user, $pass, $usuarios) {
    foreach ($usuarios as $u) {
        if ($u['user'] === $user && $u['pass'] === $pass) {
            return true;
        }
    }
    return false;
}
?>
