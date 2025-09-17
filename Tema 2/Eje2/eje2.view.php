<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="eje2.php" method="post">
        Ultimo resultado: <?php echo $resultado ?? 'N/A'; ?><br><br>
        Primer número: <input type="number" name="numero1" value="<?php echo $numero1 ?? ''; ?>" required><br><br>
        Segundo número: <input type="number" name="numero2" value="<?php echo $numero2 ?? ''; ?>" required><br><br>
        Seleccione la operación deseada: 
        <select name="operacion" required>
            <option value="sumar" <?php if(isset($operacion) && $operacion == 'sumar') echo 'selected'; ?>>Sumar</option>
            <option value="restar" <?php if(isset($operacion) && $operacion == 'restar') echo 'selected'; ?>>Restar</option>
            <option value="multiplicar" <?php if(isset($operacion) && $operacion == 'multiplicar') echo 'selected'; ?>>Multiplicar</option>
            <option value="dividir" <?php if(isset($operacion) && $operacion == 'dividir') echo 'selected'; ?>>Dividir</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>