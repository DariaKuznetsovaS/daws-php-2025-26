<?php
/*16. Crea una función que reciba 2 números obtenidos mediante GET. La aplicación
deberá realizar la siguiente operación:
● Si los números son distintos, mostrará el resultado de su suma.
● Si los números son iguales, mostrará el resultado de su multiplicación.*/

function calcular($num1, $num2){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    if($num1 != $num2){
        $resultado = $num1 + $num2;
        return "La suma de $num1 y $num2 es: $resultado";
    } else {
        $resultado = $num1 * $num2;
        return "La multiplicación de $num1 por $num2 es: $resultado";
    }
}











include 'eje16.view.php';
?>