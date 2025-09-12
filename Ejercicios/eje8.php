<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>
08. Crea una función llamada esMayor() que reciba como parámetros dos
números y devuelva TRUE si el primer número es mayor que el segundo.
</p>

<?php
function mayor($numA, $numB){
    $mayorA = $numA>$numB;
    echo var_export($mayorA);
}




    ?>
</body>
</html>