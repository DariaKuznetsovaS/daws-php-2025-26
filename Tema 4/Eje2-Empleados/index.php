<?php
require_once "bd_functions.php";
$accion = $_POST['accion'] ?? $_GET['accion'] ?? null;

/*switch($accion){
    case "insertar": 

} */





$lista = obtenerLista($dbh);

if ($lista && $lista->num_rows > 0) {
    while ($row = $lista->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["dni"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apellidos"]."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No hay resultados</td></tr>";
}

require "index.view.php";
?>