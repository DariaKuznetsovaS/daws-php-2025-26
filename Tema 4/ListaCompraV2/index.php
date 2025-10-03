<?php
require_once "db_functions.php";
$accion = $_GET['accion'] ?? $_POST['accion'] ?? null;

switch($accion){
    case "borrar":
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        borrarPorId($id); }
        break;
    case "insertar":
         if(!empty($_POST['articulo'])) {
        agregarArticulo($_POST['articulo'],$dbh);
        //Esto para que no vuelva a insrtar al darle a refrescar:
        header("Location: index.php");
exit;
        }
        
        break;
    case "borrarTodo":
        borrarTodo();
        break;
}

$lista = obtenerLista($dbh);

require "index.view.php";
?>






