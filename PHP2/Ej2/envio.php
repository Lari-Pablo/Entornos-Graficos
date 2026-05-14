<?php
$destinatario = "webmaster@xx.com";
$asunto = "Consulta del sitio";
$fecha = date("d-m-Y");
$hora = date("H:i:s");
$desde="From:" .$POST["mail"];
$consulta="
\n
Nombre: $_POST[nombre]\n
Email: $_POST[mail]\n
Consulta: $_POST[texto]\n
Enviado: $fecha a las $hora\n
\n";

mail($destinatario,$asunto,$consulta,$desde);
echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";
?>