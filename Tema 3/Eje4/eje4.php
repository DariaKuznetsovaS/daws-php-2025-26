<?php
/*04. Crea una aplicación de control de asistencia
para un evento. La aplicación tendrá que mostrar la
lista de personas (el nombre de cada una) que han
acudido al evento. Tendrá un campo de texto para
escribir el nombre de la persona y así añadir
personas a la lista. La lista se almacenará en sesión,
y existirá un botón que borre la lista completa.*/ 

session_start();
// se inicializa la sesion si no existe:
if(!isset($_SESSION['asistencia'])){
    $_SESSION['asistencia']=[];
}
if(isset($_POST['asistente'])&& !empty($_POST['asistente'])){
    $asistente = $_POST['asistente'];
    $_SESSION['asistencia'][]=htmlspecialchars($asistente);
}

if(isset($_GET['borrar'])){
    $_SESSION['asistencia']=[];
}

require "eje4.view.php"
?>