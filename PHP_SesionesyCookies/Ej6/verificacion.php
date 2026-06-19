<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "base2") or die;

$mail = $_POST['mailAl'];

$registros = mysqli_query($link, "SELECT nombre FROM alumnos where mail='$mail'");

if ($reg = mysqli_fetch_array($registros)){
    $_SESSION['nombre'] = $reg['nombre'];
    echo "Alumno encontrado.<br />";
} else{
    echo "El mail ingresado no existe.<br />";
}
?>

<a href="bienvenida.php">Ir a la página de bienvenida</a>