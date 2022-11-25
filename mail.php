<?php
$destinatario = 'krypto0kro0bz@gmail.com';

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde Sitio de Nicte";
$mensajeCompleto = $mensaje - "\nAtentamente; " . $nombre;

mail($destinatario, $mensaje, $mensajeCompleto, $header);
echo "<script>alert('correo enviado')</script>";

echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";