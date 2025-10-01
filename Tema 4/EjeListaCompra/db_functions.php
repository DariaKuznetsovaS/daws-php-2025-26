<?php

$dbh = connect($host, $dbname, $user, $pass);
function listarArticulos(){
    $stmt = $dbh->query("SELECT nombre FROM compra");

    $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
}

function agregarArticulo($texto){
    
    if(!empty($_POST['texto'])){
    $articulo = $_POST['texto'];
    $stmt = $dbh->prepare("insert into compra(nombre)values(:articulo)");
    $stmt->execute([':articulo'=>$articulo]);
}

}

function borrarPorId($articulo){
    
}










?>