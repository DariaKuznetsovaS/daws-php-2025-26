<?php
require_once __DIR__ . '/Database.php';

class ProductoModel {
    
    public static function getAll() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        
    }
    
    public static function getById($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM productos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    
    }
    
    public static function create($datos) {
        
    }
    
    public static function deleteById($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("DELETE FROM productos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        
    }
    
    public static function deleteAll() {
        
    }
}