<?php

function connect(){
    $dbname = "ejercicios";
    $host = "localhost";
    $user = "root";
    $pass = "";

    try {
        # MySQL
        $dbh= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}
function getAll(){
    $dbh=connect();
    if(!$dbh) return [];
    
    $stmt= $dbh->prepare("SELECT DNI, nombre, apellidos 
                        FROM empleados");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
function getEmpleadoByDNI($DNI){
    $dbh=connect();
    $stmt=$dbh->prepare("SELECT * FROM empleados WHERE DNI=:DNI");
    return $stmt->fetchALL(PDO::FETCH_OBJ);
}

function deleteEmpleadoByDNI($DNI){
    $dbh=connect();
    $stmt=$dbh->prepare("DELETE FROM empleados WHERE DNI=:DNI");
    $stmt->execute(['DNI'=>$DNI]);
    
}
