<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 15</title>
</head>
<body>
    <ul style="list-style-type: square;" <?php echo $diccionario["usuario1"]["nombre"]; ?>>
    <li> Usuario: <?php echo $diccionario["usuario1"]["nombre"]; ?> </li>
    <li> Nombre: <?php echo $diccionario["usuario1"]["nombre"]; ?> </li>            
    <li> Apellidos: <?php echo $diccionario["usuario1"]["apellidos"]; ?> </li>
    <li> Email: <?php echo $diccionario["usuario1"]["email"]; ?> </li>
</ul>
<ul style="list-style-type: square;" <?php echo $diccionario["usuario2"]["nombre"]; ?>>
    <li> Usuario: <?php echo $diccionario["usuario2"]["nombre"]; ?> </li>
    <li> Nombre: <?php echo $diccionario["usuario2"]["nombre"]; ?> </li>            
    <li> Apellidos: <?php echo $diccionario["usuario2"]["apellidos"]; ?> </li>
    <li> Email: <?php echo $diccionario["usuario2"]["email"]; ?> </li>
    
</body>
</html>