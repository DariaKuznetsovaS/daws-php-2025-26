<?php
session_start();

$productos = [
    ["ID" => 1, "nombre" => "Logitech K120", "descripcion" => "Teclado multimedia USB plug&play...", "precio" => 25.99],
    ["ID" => 2, "nombre" => "Lenovo LI5", "descripcion" => "El mouse Lenovo 300 compacto inalámbrico...", "precio" => 12.99],
    ["ID" => 3, "nombre" => "Monitor LG X10", "descripcion" => "LCD con retroiluminacion LED ThinkVision", "precio" => 179.99],
    ["ID" => 4, "nombre" => "Monitor Lenovo Q24i", "descripcion" => 'Pantalla de 60.45cm(23.8") Funciones como AMD FreeSync', "precio" => 172],
    ["ID" => 5, "nombre" => "ThinkPad X1 Extreme", "descripcion" => "ThinkPad X1 Extreme de 2ª generación gestiona exigentes tares informáticas sin problemas", "precio" => 1200]
];

if(!isset($_SESSION['cesta'])){
    $_SESSION['cesta']=[];
}
//Cookie para el idioma
if(isset($_POST['idioma'])){
    $idioma = $_POST['idioma'];
    setcookie("idioma", $idioma);
    $_COOKIE['idioma']=$idioma;
}
$mensaje = "";
if (isset($_COOKIE['idioma'])) {
    if ($_COOKIE['idioma'] === "es") {
        $mensaje = "Bienvenido";
    } elseif ($_COOKIE['idioma'] === "eu") {
        $mensaje = "Ongi etorri";
    }
}
//
$accion = $_POST['accion'];

switch($accion){
    case "añadir":
        $idProducto = (int)$_POST['producto_id'];
        foreach($productos as $producto){
            if($producto['ID']===$idProducto){
                $_SESSION['cesta'][]=$producto;
                break;
            }
        }
        break;
    case "comprar":
        $_SESSION['cesta']=[];
        break;

    case "eliminar":
        $idProducto = (int) $_POST['producto_id'];
        foreach ($_SESSION['cesta'] as $index => $item) {
            if ($item['ID'] === $idProducto) {
                unset($_SESSION['cesta'][$index]);
                $_SESSION['cesta'] = array_values($_SESSION['cesta']); // reindexar
                break;
            }
        }
        break;
}


require "eje7.view.php"
?>