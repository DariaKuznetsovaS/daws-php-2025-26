<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <p>
        Crea una función llamada multiplicar que reciba dos variables, a y b, y muestre
el resultado de la multiplicación por pantalla. Para probar el ejercicio se enviarán
los valores mediante una petición GET.
    </p>

    <?php
function multiplicacion($numeroA, $numeroB){
    $resultado = $numeroA * $numeroB;
    echo "El resultado de la multiplicación es: $resultado";
}
$numeroA = $_GET["a"];
$numeroB = $_GET["b"];
$resultado= multiplicacion($numeroA, $numeroB);
include "eje6.view.php";
?>
    
</body>
</html>