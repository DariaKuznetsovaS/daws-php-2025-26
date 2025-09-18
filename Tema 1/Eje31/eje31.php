 Crea una aplicación que genere un array con 20 números aleatorios con valores entre 1 y
999, utilizando la función random_int(1, 999) para generar los valores. A continuación
recorre el array utilizando la sentencia foreach y muestra por pantalla el valor más alto y el
más bajo.
<?php
$numeros = [];
$cantidad = 20;
for ($i = 0; $i < $cantidad; $i++) {
    $numeros[] = random_int(1, 999);
}


include 'eje31.view.php';
?>