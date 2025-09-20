1. Crea una página que tenga un formulario con un campo de texto en el que poder
almacenar un nombre de usuario. La aplicación guardará el texto introducido en una cookie
(sin especificar la duración) de nombre “usuario” y mostrará el último valor almacenado
siempre que la cookie contenga algún valor.
<?php
// Si se envió el formulario
if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];

    // Guardamos en cookie (de sesión, sin duración definida)
    setcookie("usuario", $texto);

    // Mostrar valor recién introducido
    $usuario = $texto;
} elseif (isset($_COOKIE['usuario'])) {
    // Si ya existe la cookie, la recuperamos
    $usuario = $_COOKIE['usuario'];
} else {
    $usuario = null;
}

if(isset($_GET['borrar'])){
    setcookie("usuario", NULL, -1);
   
}

require "eje1.view.php";
?>