<?php
/*  18. Crea una función que reciba un número indicando el día de la semana y que
muestre por pantalla el día de la semana. En caso de recibir otro número que no
esté entre el 1 y el 7, mostrará el mensaje “No es ningún día de la semana". Utiliza
un switch para realizar el ejercicio.
diaSemana(2) → “El día número 2 es martes.”
diaSemana(9) → “No es ningún día de la semana” */
$dia = $_GET['dia'] ?? null;

function diaSemana($dia){
switch($dia){
    case 1:
        $resultado = "El día número 1 es lunes.";
        break;
    case 2:
        $resultado = "El día número 2 es martes.";
        break;
    case 3:
        $resultado = "El día número 3 es miércoles.";
        break;
    case 4:
        $resultado = "El día número 4 es jueves.";
        break;
    case 5:
        $resultado = "El día número 5 es viernes.";
        break;
    case 6:
        $resultado = "El día número 6 es sábado.";
        break;
    case 7:
        $resultado = "El día número 7 es domingo.";
        break;
    default:
        $resultado = "Tiene que ser un número del 1 al 7.";
}
return $resultado;
}
include 'eje18.view.php';
?>