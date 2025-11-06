<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de empleados</title>
</head>
<body>
    <?php require('partials/header.php') ?>
    <table>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Opciones</th>
    </tr>
    <?php foreach($empleados as $empleado): ?>
    <tr>
        <td><?= $empleado->DNI ?></td>
        <td><?= $empleado->nombre ?></td>
        <td><?= $empleado->apellidos ?></td>
        <td>
            <a href="empleadosController.php?accion=verDetalles&DNI=<?= $empleado->DNI ?>">Ver detalles</a>
            <a href="empleadosController.php?accion=borrar&DNI=<?= $empleado->DNI ?>"> Eliminar </a>
        </td>
    </tr>
    <?php endforeach; ?>

    </table>
</body>
</html>