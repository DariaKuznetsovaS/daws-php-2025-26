<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Empleados</title>
</head>
<body>
    <?php require('layouts/header.php') ?>
    <main>
        <table>
            <caption>Listado de empleados</caption>
        <thead>
            <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Opciones</td>
            <tr>
        </thead>

        <tbody>
        
        <!-- Rellenar con los datos de la bd-->

        </tbody>
        
        </table>

        <p>*Opción secreta: <a href="index.php?accion=borrarTodo">Vaciar lista</a> </p>

    </main>

    
</body>
</html>