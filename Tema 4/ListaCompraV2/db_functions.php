<?php 
require_once "database.php";
$dbh = getConnection(DB_HOST, DB_NAME, USER, PASS);

function obtenerLista($dbh){
    $stmt = $dbh->query("SELECT id, nombre AS articulo FROM compra");
    $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $articulos;
}

function agregarArticulo($articulo, $dbh){
    try{
    $stmt = $dbh->prepare("INSERT INTO compra (nombre) VALUES (:nombre)");
    $stmt->execute([':nombre' => $articulo]);
    echo "Artíclo insertado correctamente";
    } catch (PDOException $e){
        error_log("Error al insertar: " .$e->getMessage());
    }
}

function borrarPorId($id){
    global $dbh;
    $stmt = $dbh->prepare("DELETE FROM compra WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

function borrarTodo(){
    global $dbh;
    $dbh->exec("TRUNCATE TABLE compra");
    echo "La lista borrada correctamente";
}
