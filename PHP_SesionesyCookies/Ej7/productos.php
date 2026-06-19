<?php
$link = mysqli_connect("localhost", "root", "", "Compras") or die;
$consulta = "SELECT * FROM catálogo"; 
$resultado = mysqli_query($link, $consulta);
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Listado </title>
    </head>
    <body>
        <h2>Catálogo de Productos</h2>";
        <table border="1">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <?php
        while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
        <tr>
            <td><?php echo $fila["producto"]; ?></td>
            <td><?php echo $fila["precio"]; ?></td>
        <td>
            <a href="agregar.php?id="=<?php echo $fila["id"]; ?>">
                 Agregar al carrito
            </a>
        </td>
        </tr>
        <?php
        }
        mysqli_close($link);
        ?>
        </table>
        <br />
        <a href="carrito.php">Ver carrito</a> 
</body>
</html>