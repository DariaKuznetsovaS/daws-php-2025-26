<?php
session_start();

$usuarios =[
    'admin' => '1234',
    'empleado1' => 'abcd',
    'jefe' => 'secreto'
];

if($_SERVER['REQUEST_METHOD']==='POST'){
    $usuario = $_POST['usuario'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if(isset($usuarios[$usuario]) && $usuarios[$usuario]===$pass){
        $_SESSION['usuario']=$usuario;
        header('Location: empleadosController.php');
        exit;
    } else{
        $error = "Usuario o contraseña incorrectos";
    }
}

if(isset($_SESSION['usuario'])){
    header('Location: empleadosController.php');
    exit;
}

require "login.view.php";