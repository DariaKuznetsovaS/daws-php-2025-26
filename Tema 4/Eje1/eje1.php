<?php
$host = "localhost";
$dbname = "ejercicios";
$user = "root";
$pass = "";
/*Crea una consulta y muestra los resultados por pantalla.
Inserta un nuevo registro desde PHP y vuelve a consultar los datos. */

function connect($host, $dbname, $user, $pass){
    try{
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        //Modo de errores, lanza excepciones:
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }
    catch(PDOException $e){
        echo $e ->getMessage();
    }
}


    try{
        //Crear el objeto PDO:
        $dbh = connect($host, $dbname, $user, $pass);

       $sqlInsert = "INSERT INTO alumno(nombre, apellidos, email, edad)
                  VALUES (:nombre, :apellidos, :email, :edad)";
    
    $stmt = $dbh->prepare($sqlInsert);

    // Datos a insertar (ejemplo)
    $nuevoAlumno = array(
        "nombre" => "Lorena",
        "apellidos" => "Anboto Etxebarria",
        "email" => "lorena@ejemplo.org",
        "edad" => 18
    );
    $stmt->execute($nuevoAlumno);

    echo "Hecha la insert correctamente";

        /*$stmt = $dbh->prepare("SELECT ID, Nombre FROM Alumno");
        $stmt -> execute();
        echo "<h3>Lista de alumnos: </h3>";

        //Repetitiva con el fetch:
        $stmt->fetch(); */
        
    // 3. Seleccionar y mostrar todos los alumnos
    $sqlSelect = "SELECT id, nombre, apellidos, email, edad FROM alumno";
    $stmt = $dbh->query($sqlSelect);

    echo "<h3>Lista de alumnos:</h3>";

    // 4. fetch() devuelve una fila en cada llamada, o false cuando no hay más
    while ($alumno = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $alumno['id'] . " | ";
        echo "Nombre: " . $alumno['nombre'] . " " . $alumno['apellidos'] . " | ";
        echo "Email: " . $alumno['email'] . " | ";
        echo "Edad: " . $alumno['edad'] . "<br>";
    }

    } catch(PDOException $e){
        echo "Error de consulta" . $e -> getMessage();
    }


   
    
    



?>