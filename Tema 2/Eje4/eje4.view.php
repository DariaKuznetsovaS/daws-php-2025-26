<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="eje4.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" required><br>
        
        <label for="password">Contraseña: </label>
        <input type="password" name="password" requiered><br>
    
        <button type="submit">Entrar</button>

    </form>
    <?php if(isset($mensaje)): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>    

    
</body>
</html>