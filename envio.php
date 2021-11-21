<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensaje = $_POST['mensaje'];

$header  = 'From: '. $email ."\r\n";
$header .= "X-Mailer: PHP/". phpversion() . "\r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: Text/plain";

$mensaje  = "Este mensaje fue enviado por: ". $name ."\r\n";
$mensaje .= "Correo de contacto: ". $email ."\r\n";
$mensaje .= "Telefono de contacto: ". $phone ."\r\n";
$mensaje .= "El mensaje es: ".$_POST['mensaje']."\r\n";
$mensaje .= "Enviado el: ". date('d/m/Y', time());
$para = 'fimmcode@gmail.com';
$asunto = 'Mensaje de Web FimmCode';

mail($para,$asunto,utf8_decode($mensaje), $header);

echo "<script type='text/javascript'>alert('tu mensaje fue enviado');</script>";
echo "<script type='text/javascript'>window.location.href='index.html';</script>";
?>