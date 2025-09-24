<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Lista de asistentes: </h3>
    <ul>
    <?php foreach($_SESSION['asistencia'] as $asistente): ?>
        <li>
            <?=$asistente ?>
        </li>    
    <?php endforeach; ?>
    </ul>

    <h3>Añadir asistente</h3>
    <br>
    <form action="eje4.php" method="post">
    <input type="text" name="asistente">
    <button type="submit">Añadir</button>
    <br><br>
    <a href="eje4.php?borrar=1">Vaciar lista</a>
    </form>
</body>
</html>