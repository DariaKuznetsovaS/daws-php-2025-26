<?php
session_start();
require_once "db_functions.php";

function render($vista, $datos=[]){
    extract($datos);
    require "$vista.view.php";
    exit;
}
if(!isset($_SESSION['usuario'])){
    header("Location: login.view.php");
    exit;
}



$accion=$_GET['accion'] ?? 'listar';

switch($accion){
    case "verDetalles": 
        $DNI = $_GET['DNI'] ?? '';
        if($DNI){
            $empleado = getEmpleadoByDNI($DNI);
            render("detallesEmpleado",['empleado'=>$empleado]);
        }else{
            header("Location: empleadosController.php");
            exit;
        }
        
        break;
    case "borrar":
        $DNI = $_GET['DNI'] ?? '';
        if($DNI){
            borrarEmpleado($DNI);
        }
        header("Location: empleadosController.php");
        exit;
        break;
    case "listar":
        default:
        $empleados = getAll();
        render("empleados",['empleado'=>$empleados]);
        break;

}


function borrarEmpleado(){
    $DNI=$_GET['DNI'];
    deleteEmpleadoByDNI($DNI);
}

require "empleados.view.php";
