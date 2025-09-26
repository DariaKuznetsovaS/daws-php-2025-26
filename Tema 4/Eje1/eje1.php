<?php
$host = "127.0.0.1";
$dbname = "ejercicios";
$user = "root";
$pass = "";
/*Crea una consulta y muestra los resultados por pantalla.
Inserta un nuevo registro desde PHP y vuelve a consultar los datos. */

function connect($host, $dbname, $user, $pass){
    try{
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    }
    catch(PDOException $e){
        echo $e ->getMessage();
    }
}

function mostrarDatos($dbh){
    try{
        $stmt = $dbh->prepare("SELECT ID, Nombre FROM Alumno");
        $stmt -> execute();
        $resultados = $stmt->fetch();

    foreach($resultados as $fila){
    echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . "<br>";
    }


    } catch(PDOException $e){
        echo "Error de consulta" . $e -> getMessage();
    }
}
function insertarAlumno($dbh){
    try{
    $stmt = $dbh -> prepare("INSERT INTO Alumno(nombre, apellidos, email, edad) VALUES('User1','Apellidos',''correo@correo.com', 15)");
        $stmt -> execute();
    } catch(PDOException $e){
        echo "Error al insertar" .$e ->getMessage();
    }
}


?>