<?php
/*24. Crea un array multidimensional que simule una agenda de contactos (contendrá de cada
persona su nombre, apellidos, teléfono y dirección de correo electrónico). Implementa una
función que imprima en una tabla los datos de las personas utilizando la sentencia for.
Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer.
*/
$agenda = [
    ["nombre" => "Amaia",
     "apellidos" => "Gorbea Jainaga",
      "telefono" => "945010101", 
      "email" => "amaia.gorbea@example.com"],

    ["nombre" => "Juan",
     "apellidos" => "Pérez Gómez",
      "telefono" => "945010102", 
      "email" => "juan.perez@example.com"],

    ["nombre" => "María",
     "apellidos" => "López Sánchez",
      "telefono" => "945010103", 
      "email" => "maria.lopez@example.com"]
];

/*function imprimirAgenda($agenda){
    $resultado = "<table border='1'>
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Email</th>
    </tr>";
    for($i=0; $i<count($agenda); $i++){
        $resultado .= "<tr>
            <td>".$agenda[$i]['nombre']."</td>
            <td>".$agenda[$i]['apellidos']."</td>
            <td>".$agenda[$i]['telefono']."</td>
            <td>".$agenda[$i]['email']."</td>
        </tr>";
    }
    $resultado .= "</table>";
    return $resultado;
}*/
    

include 'eje24.view.php';
?>