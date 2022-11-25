<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$mail= $_POST['mail'];
$mensaje= $_POST['mensaje'];
$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .="mensaje".$_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'krypto0kro0bz@gmail.com';
$asunto = 'Prueba';

mail($para, $asunto, $mensaje, $header);

echo 'mensaje enviado correctamente';

?>