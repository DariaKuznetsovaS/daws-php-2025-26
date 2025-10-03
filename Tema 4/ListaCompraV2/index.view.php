<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de la compra</title>
</head>
<style>
body{
    padding: 1em;
    background-color: gainsboro;
}
h3{
    color: indigo;
}
li{
    list-style: square;
}
input{
    padding: .5em;
    background-color: lightyellow;
    border: dotted indigo;
    border-radius: .5em;
}
button{
    padding: .5em;
    margin: .5em;
    background-color: indigo;
    color: yellow;
    font-weight: bold;
    border: dotted lightblue;
    border-radius: .5em;
}
a{
    font-style: italic;
    text-decoration: none;
    color: indigo;
}
button:hover{
    background-color: yellow;
    color: indigo;
    border: dotted indigo;
}
</style>    
<body>


    <h3>Lista de compra:</h3>
    <ul>
    <?php foreach($lista as $indice => $articulo): ?> 
        <li>
        <?php echo $articulo['articulo']; ?>
        <a href="index.php?accion=borrar&id=<?php echo $articulo['id']; ?>">Eliminar</a>
     </li>
     <?php endforeach; ?>
    </ul> 
    
    <h4>Añadir elemento</h4>
    <form action="index.php" method="post">
    <input type="text" name="articulo">
    <input type="hidden" name="accion" value="insertar"> 
    <button type="submit" name="accion" value="insertar">Añadir</button>
    </form>

    <br>

    <a href="index.php?accion=borrarTodo">Vaciar lista</a>

    

</body>
</html>