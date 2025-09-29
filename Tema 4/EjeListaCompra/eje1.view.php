<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compra</title>
</head>
<body>
    <ul>
        <?php foreach ($resultado as $row): ?>
            <li><?php echo $row['nombre']; ?> </li>
        <?php endforeach; ?>

    </ul>

    <form action="EjeListaCompra" method="post">
           <strong> <label for="add">Añadir elemento:</label> </strong>
            <br><br>
            <input type="text" id="add">
            <button type="submit">Añadir</button>
            <br><br>
            <a href="EjeListaCompra.php?borrar">Vaciar lista</a>

    </form>
</body>
</html>