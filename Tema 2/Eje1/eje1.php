Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación
pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado,
mostrará el resultado de la conversión realizada. El formulario siempre se mostrará,
de forma que el usuario pueda seguir introduciendo valores
<?php
$grados = $_POST['grados'] ?? null;
$unidad = $_POST['unidad'] ?? null;

$resultado = null;
$unidadResultado = null;

if($grados !== null && $unidad !==null){
    if($unidad === 'C'){
        $resultado = ($grados * 9/5) + 32;
        $unidadResultado = 'F';
    } elseif($unidad === 'F'){
        $resultado = ($grados - 32) * 5/9;
        $unidadResultado = 'C';
    } else {
        $resultado = "Unidad no válida.";
        $unidadResultado = '';
    }
} 


require 'eje1.view.php';
?>