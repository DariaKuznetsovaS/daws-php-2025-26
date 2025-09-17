<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Resultado de la conversión</h2>
    <form action="" method="post">
       Introduce la temperatura:  <input type="text" name="grados"><br>
       Indica la unidad de la temperatura: <select name="unidad">
           <option value="C">Celsius</option>
           <option value="F">Fahrenheit</option>
       </select><br>
       <input type="submit" value="Convertir">
   </form>
   <?php if(isset($resultado)&& isset($unidadResultado)): ?>
       <h3>El resultado es: <?php echo $resultado; ?> grados <?php echo $unidadResultado; ?></h3>
   <?php endif; ?>


</body>
</html>