<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$fact = $_POST['fact'];
$mensaje = $_POST['message'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
//$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name  . "\r\n";
$message .= "Su email es: " . $mail . "\r\n";
$message .= "Mensaje: " . $mensaje . "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'gabriel.regalado2809@gmail.com';
$asunto = $fact;

$mail = @mail('gabriel.regalado2809@gmail.com', $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>