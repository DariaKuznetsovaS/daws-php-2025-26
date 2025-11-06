<?php include_once __DIR__ . '/layout/head.php'; ?>

     
<h1>Detalle del Producto</h1>
<php if($producto): ?>
    <ul>
    <li><strong>ID:</strong> <?= $producto->ID ?></li>
    <li><strong>Nombre:</strong> <?= $producto->nombre ?></li>
    <li><strong>Descripción:</strong> <?= $producto->descripcion ?></li>
    <li><strong>Precio:</strong> $<?= number_format($producto->precio, 2) ?></li>
    </ul>
<php else: ?>
    <p>Producto no encontrado.</p>
<php endif; ?>
<?php include_once __DIR__ . '/layout/footer.php'; ?>