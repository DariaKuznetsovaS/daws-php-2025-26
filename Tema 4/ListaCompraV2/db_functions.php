<?php 
require_once "database.php";
$dbh = connect(DB_HOST, DB_NAME, USER, PASS);

function obtenerLista(){
    global $dbh;
    $stmt = $dbh->query("SELECT id, nombre AS articulo FROM compra");
    $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $articulos;
}

function agregarArticulo($nombre){
    global $dbh;
    $stmt = $dbh->prepare("INSERT INTO compra (nombre) VALUES (:nombre)");
    $stmt->execute([':nombre' => $nombre]);
}

function borrarPorId($id){
    global $dbh;
    $stmt = $dbh->prepare("DELETE FROM compra WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

function borrarTodo(){
    global $dbh;
    $dbh->exec("DELETE FROM compra");
}
