<?php
if(isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    setcookie("usuario", $usuario, time() + (60 * 60 * 24 * 90));
    $_COOKIE["usuario"] = $usuario;
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Página recordar usuario</title>
</head>
<body>
    <p>Formulario de carga de usuario</p>
    <br />
    <?php
    if(isset($_COOKIE["usuario"])){
        echo 'El último nombre de usuario ingresado fue ' . $_COOKIE["usuario"];
    }
    ?>
    <form action="formulario.php" method = "post">
        Ingrese su nombre de usuario:
        <br />
        <input type="text" name="usuario">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>