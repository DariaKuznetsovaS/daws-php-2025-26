<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 1</title>
</head>
<body>
    <?php
$nombre = $_GET["nombre"];
$edad = $_GET["edad"];

/*echo $nombre + $edad; */
$resultado = "Mi amigo {$nombre} tiene {$edad} años";
echo $resultado;
?>
    
</body>
</html>

