<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agenda</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>

    <?php foreach($agenda as $contacto): ?>
        <tr>
            <td><?php echo $contacto["nombre"]; ?></td>
            <td><?php echo $contacto["apellidos"]; ?></td>
            <td><?php echo $contacto["telefono"]; ?></td>
            <td><?php echo $contacto["email"]; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>