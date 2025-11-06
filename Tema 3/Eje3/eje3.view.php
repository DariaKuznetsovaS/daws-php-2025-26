<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p>Idioma: <?php 
        echo $idioma ? htmlspecialchars($idioma) : "Ninguno"; 
        ?></p>


<form method="post" action="eje3.php">
    <label for="idioma">Elige tu idioma: </label>
    <select name="idioma">
        <option name="es" value="es">Castellano</option>
        <option name="eus" value="eus">Euskera</option>    
    </select>
    <br>
    <button type="submit">Guardar</button>
</form>    
</body>
</html>