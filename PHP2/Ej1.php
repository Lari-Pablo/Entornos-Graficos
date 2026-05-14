<?php
$destinatario="laripablo03@gmail.com";
$asunto = "Correo con formato HTML";
$cabecera = "MIME-Version: 1.0\r\n";
$cabecera .= "Content-type:text/html; charset=iso-8859-1\r\n";
$cuerpo = "
<html>
<head>Envío de correo electrónico HTML</head>
<body>
    <h1>Ejercicio 1 - Práctica PHP</h1>
    <p> Esto es un correo electrónico con formato HTML para el ejercicio 1 de la práctica número 5 de PHP.</p>
</body>
</html> ";

mail($destinatario, $asunto, $cuerpo, $cabecera);
?>

