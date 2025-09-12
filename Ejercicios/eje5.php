<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 4</title>

</head>
<body>
    <p>Crea dos variables, a y b que recojan los valores enviados mediante el método
GET. Almacena el resultado de las siguientes operaciones en nuevas variables y
muéstralas por pantalla.
○ Resta de a y b
○ División de a entre b
○ Resultado de a mayor que b
○ Resultado de a menor o igual que b
Nota: para imprimir una variable con valor booleano, utiliza la función
var_export($variable)</p>

<?php
$a = $_GET["a"];
$b = $_GET["b"];
$resultado;

function resta($a, $b){
    return $a - $b;
    
}
echo "El resultado de la resta es: " .resta($a,$b);

function division($a, $b){
    if($b>0){
        $resultado = $a/$b;
    }
    else {
        echo "No se puede dividir entre 0";
    }
     return $resultado;
    
}
echo "El resultado de la división es: " .division($a,$b);

function aMayorB($a, $b){
    $resultado = $a>$b;

   return var_export($resultado);
}
$resultado = ($a>$b);
echo "Es el resultado de A mayor que B " . var_export($resultado,true);
?>

    
</body>
</html>