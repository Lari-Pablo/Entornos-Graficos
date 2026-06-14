<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Datos almacenados</title>
</head>
<body>

<h2>Datos almacenados en la sesión</h2>
<br />

<?php
echo "Nombre de usuario: " . $_SESSION["usuario"];
echo "<br />";
echo "Clave: " . $_SESSION["clave"];
?>

</body>
</html>