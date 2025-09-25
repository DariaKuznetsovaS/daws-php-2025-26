<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
</head>
<body>
    <h1>Cesta de la compra</h1>

    <h2>Catálogo de productos</h2>
    <table>
        <tr>
            <th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio (€)</th><th>Acción</th>
        </tr>
        <?php foreach ($productos as $prod): ?>
        <tr>
            <td><?= $prod['ID'] ?></td>
            <td><?= htmlspecialchars($prod['nombre']) ?></td>
            <td><?= htmlspecialchars($prod['descripcion']) ?></td>
            <td><?= number_format($prod['precio'], 2) ?></td>
            <td>
                <form method="post" style="margin:0;">
                    <input type="hidden" name="producto_id" value="<?= $prod['ID'] ?>">
                    <button type="submit" name="accion" value="añadir">Añadir a la cesta</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="cesta">
        <h2> Cesta de la compra</h2>
        <?php if (empty($_SESSION['cesta'])): ?>
            <p>No hay productos en la cesta. Comience a comprar.</p>
        <?php else: ?>
            <table>
                <tr><th>Nombre</th><th>Precio (€)</th><th>Acción</th></tr>
                <?php
                $total = 0;
                foreach ($_SESSION['cesta'] as $item):
                    $total += $item['precio'];
                ?>
                <tr>
                    <td><?= htmlspecialchars($item['nombre']) ?></td>
                    <td><?= number_format($item['precio'], 2) ?></td>
                    <td>
                        <form method="post" style="margin:0;">
                            <input type="hidden" name="producto_id" value="<?= $item['ID'] ?>">
                            <button type="submit" name="accion" value="eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td><strong>Total</strong></td>
                    <td colspan="2"><strong><?= number_format($total, 2) ?> €</strong></td>
                </tr>
            </table>

            <form method="post">
                <button type="submit" name="accion" value="comprar">Realizar Compra</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>