<?php

$host = "localhost";
$dbname = "ejemplo1";
$usuario = "root";
$contrasena = "";

// Función para conectar a la base de datos usando PDO
function connect($host, $dbname, $user, $pass){
   try {
        # MySQL
        $dbh= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        // Activar el modo de errores de PDO (lanza excepciones si algo falla)
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   return $dbh;
   }
   catch(PDOException $e) {
       echo $e->getMessage();
   }
}

$db = connect($host, $dbname, $usuario, $contrasena);

/****** Sentencia sin PARAMETROS ******/ 

/* Primer ejemplo con array asociativo */
echo "<p>ACCESO MEDIANTE ARRAY ASOCIATIVO:<p>";
$stmt = $db->prepare("SELECT id, tarea FROM tareas");
$stmt->execute();

while($row = $stmt->fetch()) {
    echo $row['id'] . "-";
    echo $row['tarea'] . "<br>";
}

/* Segundo ejemplo con objeto anónimo */
echo "<p>ACCESO MEDIANTE OBJETO ANÓNIMO<p>";
$stmt = $db->prepare("SELECT id, tarea FROM tareas");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();

while($row = $stmt->fetch()) {
    echo "$row->id -------- $row->tarea <br>";
}


/****** Sentencia con PARAMETROS ******/
echo "<p>SENTENCIA CON PARÁMETROS<p>";
$id_tarea = 1;
// $id_tarea = $_GET["id"]
$datos = array("id" => $id_tarea);
$stmt = $db->prepare("SELECT id, tarea FROM tareas WHERE id = :id");
$stmt->execute($datos);

while($row = $stmt->fetch()) {
    echo $row['id'] . "-";
    echo $row['tarea'] . "<br>";
}


/* Abrebiación con QUERY */

/*
$stmt = $db->query("SELECT id, tarea FROM tareas");

while($row = $stmt->fetch()) {
    //echo $row['id'] . "-";
    //echo $row['tarea'] . "<br>";
}
*/

/* Ejemplo con fetchObject() */
echo "<p>USO DE fetchObject()<p>";
$stmt = $db->query("SELECT id, tarea FROM tareas");
while($row = $stmt->fetchObject()) {
    echo "$row->id --- $row->tarea <br>";
}


/* Ejemplo con fetchAll() */
echo "<p>USO DE fetchAll():<p>";

// $resultado contendrá un array con todos los datos
$stmt = $db->prepare("SELECT id, tarea FROM tareas");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_OBJ);


// Para leer las filas podemos recorrer el array y acceder a la información.
foreach ($resultado as $row){
   // echo $row["id"]." ///// ".$row["tarea"]."<br>";
   echo $row->id." ///// ".$row->tarea."<br>";
}



