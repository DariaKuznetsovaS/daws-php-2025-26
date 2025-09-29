<?php
$host="localhost";
$dbname="ejercicios";
$user = "root";
$pass = "";

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

$dbh = connect($host, $dbname, $user, $pass);

$stmt = $dbh->query("select nombre from compra");

$resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);

if(!empty($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $stmt = $dbh->prepare("insert into compra(nombre)values(:nombre)");
    $stmt->execute([':nombre'=>$nombre]);
}


require "eje1.view.php";

?>