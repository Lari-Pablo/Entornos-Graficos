<?php
session_start();

$id = $_GET["id"];
$_SESSION["carrito"][] = $id;

echo "Producto agregado correctamente<br><br>";
echo '<a href="productos.php">Volver al catálogo</a>';
?>