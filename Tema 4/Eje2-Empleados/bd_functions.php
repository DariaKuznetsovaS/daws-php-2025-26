<?php
require_once "database.php";
function obtenerLista($dbh){
    $sql = "SELECT dni, nombre, apellidos FROM empleados";
    return $result->query($sql);
}






?>