<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "Compras") or die;
mysqli_select_db($link,"Compras");

?>
<html>
    <head>
        <title>Página carrito de compras</title>
        <meta charset="UTF-8">
    </head>    
<body>
<h1>Carrito de Compras</h1>

<?php
$total = 0;
if(isset($_SESSION["carrito"])){
    foreach($_SESSION["carrito"] as $id){
        $consulta = mysqli_query($link, "SELECT * FROM catalogo WHERE id=$id");
        $fila = mysqli_fetch_assoc($consulta);
        echo $fila["producto"] . " - $" . $fila["precio"] . "<br />";
        $total += $fila["precio"];
    }
    echo "<br />";
    echo "<h2>Total: $" . $total . "</h2>";
}else{
    echo "Carrito vacío";
}
?>
<br />
<a href="productos.php">Volver al catálogo</a>
</body>
</html>