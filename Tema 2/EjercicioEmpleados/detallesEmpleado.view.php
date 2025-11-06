<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>Curriculum</th>
    </tr>
    <?php foreach($empleado as $dato): ?>
        <tr>
            <td><?= $dato->DNI ?></td>
            <td><?= $dato->nombre ?></td>
            <td><?= $dato->apellidos ?></td>
            <td><?= $dato->edad ?></td>
            <td><?= $dato->sexo ?></td>
            <td><?= $dato->fecha_nac ?></td>
            <td><?= $dato->curriculm ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>