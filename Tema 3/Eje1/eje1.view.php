<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="eje1.php" method="post">
    
    <label for="texto">Introduce el texto que deseas almacenar: </label>
    <input type="text" name="texto">
    <button type="submit"> Guardar </button>
    </form>

    <?php if (!empty($usuario)): ?>
        <p>Último usuario almacenado: <strong><?= htmlspecialchars($usuario) ?></strong></p>
    <?php endif; ?>   
</body>
</html>