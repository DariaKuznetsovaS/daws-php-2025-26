<?php
session_start();
// se inicializa la sesion si no existe:
if(!isset($_SESSION['asistencia'])){
    $_SESSION['asistencia']=[];
}
if(isset($_POST['asistente'])&& !empty($_POST['asistente'])){
    $asistente = $_POST['asistente'];
    $_SESSION['asistencia'][]=htmlspecialchars($asistente);
}

if(isset($_POST['borrar'])){
    $_SESSION['asistencia']=[];
}

require "eje4.view.php"
?>