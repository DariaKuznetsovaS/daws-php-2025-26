<?php
/*21. Modifica el programa anterior de forma que en el momento en el que la suma
sea mayor que 100, devuelva el último valor antes de superar 100.*/

$numero = $_GET['numero'] ?? null;
function sumaMenorCien($numero){
    $resultado = 0;
    for($i=0; $i<=$numero; $i++){
        if($resultado + $i > 100){
            break;
        }
        $resultado += $i;
    }
    return $resultado;

}
require 'eje21.view.php';
?>