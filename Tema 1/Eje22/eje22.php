<?php
/*22. Crea un array con nombres de países y a continuación una función que reciba
el nombre de un país y recorra el array, comprobando valor por valor si alguno de
ellos es igual al del parámetro recibido. Devolverá la posición en la que se
encuentre (en caso de no encontrarlo devolverá -1)..
[“Brasil”, “Portugal”, “Islandia”, “Mexico”, “Filipinas”, “Marruecos”]
encontrarPosicion(“Islandia”) → 3
encontrarPosicion(“Dinamarca”) → -1
Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer. */
$paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];
$pais = $_GET['pais'] ?? null;
function encontrarPais($pais, $paises){
    for($i=0; $i<count($paises); $i++){
        if($paises[$i] == $pais){
            return "El país $pais se encuentra en la posición $i del array.";
        }
    }
    return "El país $pais no se encuentra en el array.";
}