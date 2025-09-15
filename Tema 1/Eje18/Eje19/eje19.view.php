<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El resultado de la suma: </h1>
    <p><?php echo "El resultado de la suma de los números entre 0 y $numero es: "; ?></p>
    <p><?php echo suma($numero) ?? ''; ?></p>
</body>
</html>