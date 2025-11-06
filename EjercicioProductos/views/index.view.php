<?php include_once __DIR__ . '/layout/head.php'; ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>
    <?php foreach($listaProductos as $producto): ?>
    <tr>
        <td><?= $producto->ID ?></td>
        <td><?= $producto->nombre ?></td>
        <td><?= $producto->descripcion ?></td>
        <td>$<?= number_format($producto->precio, 2) ?></td>
        <td>
            <a href="index.php?accion=detalle&id=<?= $producto->ID ?>">Ver Detalle</a> |
            <a href="index.php?accion=borrar&id=<?= $producto->ID ?>" onclick="return confirm('¿Estás seguro de que deseas borrar este producto?');">Borrar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include_once __DIR__ . '/layout/footer.php'; ?>

