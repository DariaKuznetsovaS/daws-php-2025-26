<?php
/*20. Modifica el programa anterior para que sume únicamente los números pares*/ 

$numero = $_GET['numero'] ?? null;
function sumaPares($numero){
    $resultado = 0;
    for($i=0; $i<=$numero; $i++){
        if($i % 2 == 0){
            $resultado += $i;
        }
    }
    return $resultado;

}
require "eje20.view.php";
?>