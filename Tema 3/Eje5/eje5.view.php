<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['usuario'])): ?>
            <p>Bienvenid@, <?=htmlspecialchars($_SESSION['usuario']) ?></p>
            <a href="eje5.php?salir=1">Cerrar sesión</a>
    
    <?php elseif ($_SESSION['intentos'] >= 3): ?>
        <p style="color:red;">Has superado el número máximo de intentos en esta sesión.</p>
        <a href="eje5.php?salir=1">Iniciar nueva sesión</a>
    
    <?php else: ?>
        
        <form action="eje5.php" method="post">
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario">
            <br>
            <br>
            <label for="pass">Password: </label>
            <input type="password" name="pass">
            <br>
            <br>
            <button type="submit">Iniciar sesión</button>

        </form>

        <?php if (!empty($error)): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php endif; ?>
    <?php endif; ?>
    
</body>
</html>