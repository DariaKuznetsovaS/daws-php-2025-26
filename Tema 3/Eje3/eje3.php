<?php
/*Crea una página que tenga un <select> con dos opciones: “Euskera” y “Castellano”. La
aplicación guardará el valor indicado en una cookie de nombre “idioma” (tendrá 1 minuto de
duración) y mostrará el último valor almacenado siempre que la cookie contenga algún
valor. */


// Si se ha enviado el formulario, guardamos la cookie
if (isset($_POST['idioma'])) {
    setcookie("idioma", $_POST['idioma'], time() + 60); // 1 minuto
    $idioma = $_POST['idioma'];
} elseif (isset($_COOKIE['idioma'])) {
    // Si ya hay cookie, la usamos
    $idioma = $_COOKIE['idioma'];
} else {
    $idioma = ""; // Valor por defecto
}

include "eje3.view.php";
?>