<?php
/*Crea un programa que reciba un número y realice la suma de todos los
números entre el 0 y el número dado (este incluido). Deberá mostrar el resultado. */
$numero = $_GET['numero'] ?? null;
$resultado = suma($numero) ?? null;
function suma($numero){
    $resultado = 0;
    for($i=0; $i<=$numero; $i++){
        $resultado += $i;
    }
    return $resultado;
}



require 'eje19.view.php';
?>