<?php
function validarCampos($asunto, $email, $motivo, $mensaje) {
    if(empty($asunto) || empty($email) || empty($motivo) || empty($mensaje)) {
       echo "Todos los campos son obligatorios.";
       return false;
    }

    return true;
}

$asunto = $_POST['asunto'] ?? null;
$email = $_POST['email'] ?? null;   
$motivo = $_POST['motivo'] ?? null;
$mensaje = $_POST['mensaje'] ?? null;
$resultado = null;
if($asunto !== null && $email !== null && $motivo !== null && $mensaje !== null){
    if(validarCampos($asunto, $email, $motivo, $mensaje)){
        $resultado = "Mensaje enviado correctamente.";
    } else {
        $resultado = "Error al enviar el mensaje.";
    }
}



require "eje3.view.php"
?>