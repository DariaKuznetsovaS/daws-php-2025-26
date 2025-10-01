<?php
require_once "db_functions.php";
$accion = $_GET['accion'];

switch($accion){
    case "borrar":
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        borrarPorId($id); }
        break;
    case "insertar":
         if(!empty($_POST['articulo'])) {
        agregarArticulo($_POST['articulo']);
        }
        break;
    case "borrarTodo":
        borrarTodo();
        break;
}

$lista = obtenerLista();

require "index.view.php";
?>






