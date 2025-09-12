<?php
function concatenar($cadena1, $cadena2){
    $resultado = $cadena1 . " " . $cadena2;
    return $resultado;
}
$cadena1 = $_GET["cadena1"] ?? "Cadena 1";
$cadena2 = $_GET["cadena2"] ?? "Cadena 2";
$resultado= concatenar($cadena1, $cadena2);
include "eje9.view.php";
?>