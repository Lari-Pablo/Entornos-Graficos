<?php
include ("comprobarUsu.php");
if (!empty ($_POST)){
    $usuario = $_POST['usuario'];
    if(!empty($usuario)){
        comprobar_nombre_usuario($usuario);
        }
    else {
        echo "Error - datos incompletos...";
    }
}
?>

<form method="POST">
Usuario:<input type="text" name="usuario">

<input type="submit" value="Enviar"> 
</form>
    