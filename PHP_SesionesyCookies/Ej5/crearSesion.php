<?php
session_start();
$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["clave"] = $_POST["clave"];
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Sesión creada</title>
</head>
<body>

<h2>Variables de sesión creadas.</h2>

<a href="mostrarDatos.php">Ver datos almacenados</a>

</body>
</html>