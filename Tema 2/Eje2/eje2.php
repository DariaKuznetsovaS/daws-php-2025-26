Crea una aplicación que simule una
calculadora. La calculadora estará
representada por un formulario con dos
campos numéricos y un desplegable
para indicar la operación que se desea
realizar (suma, resta, multiplicación o
división). La aplicación deberá mostrar el
resultado de la operación realizada y
mostrar un mensaje de error cuando se
intente dividir entre cero.
<?php
$numero1 = $_POST['numero1'] ?? null;
$numero2 = $_POST['numero2'] ?? null;
$operacion = $_POST['operacion'] ?? null;
$resultado = null;

if($numero1 !== null && $numero2 !== null && $operacion !== null){
    switch($operacion){
        case 'sumar':
            $resultado = $numero1 + $numero2;
            break;
        case 'restar':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicar':
            $resultado = $numero1 * $numero2;
            break;
        case 'dividir':
            if($numero2 == 0){
                $resultado = "Error: No se puede dividir entre cero.";
            } else {
                $resultado = $numero1 / $numero2;
            }
            break;
        default:
            $resultado = "Operación no válida.";
    }

}



require'eje2.view.php';
?>