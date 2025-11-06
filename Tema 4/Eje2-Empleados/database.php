<?php
require_once "config.php";
$db_connection = null;
function getConnection(){
    global $db_connection;
    if ($db_connection === null) {
        try {
            $db_connection = new PDO(
                "mysql:host=".DB_HOST.";dbname=".DB_NAME, 
                USER, 
                PASS
            );
            $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
    
    return $db_connection;
}

?>