<?php
$name = $_POST['name'];
$domicilio = $_POST['domicilio'];
$message = $_POST['message'];
$correo = $_POST['correo'];
$cel=$_POST['cel'];

$header = 'From: ' . 'KeniFood' . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Solicitud de Union a KF\r\n";
$message .= "Nombre del Negocio : " . $name . " \r\n";
$message .= "Domicilio : " . $domicilio . " \r\n";
$message.= "Numero de telefono :" .$cel. " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());
$message.= "El personal de KeniFood se pondra en contacto lo mas pronto posible"

$para = 'jorge.antonio.ce.jace@gmail.com';
$asunto = 'Mensaje de KF';
mail($para, $asunto, utf8_decode($message), $header);
mail($correo,$asunto,utf8_decode($message), $header);
header("Location:https://kfapp1.000webhostapp.com/index.html");

?>