<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar Sesón</h1>
    <?php if(!empty($error)): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>

    <form action="loginController.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario">

        <label for="pass">Contraseña</label>
        <input type="password" id="pass" name="pass">

        <button type="submit">Entrar</button>

    </form>
    
</body>
</html>