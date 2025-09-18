<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="eje3.php" method="post">
        <input type="text" name="asunto" placeholder="Asunto">
        <input type="text" name="email" placeholder="Email">
        <select name="motivo" value="motivo">
            <option value="soporte">Soporte técnico</option>
            <option value="info">Información de productos</option>
            <option value="queja">Queja</option>
            <option value="otro">Otro</option>
        </select>
        <br><br>
        <textarea name="mensaje" rows="5" cols="30" placeholder="Escribe tu mensaje aquí..."></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php if(isset($resultado)): ?>
        <p> <?php echo $resultado; ?>
    <?php endif; ?>
</body>
</html>