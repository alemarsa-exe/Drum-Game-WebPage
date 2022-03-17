<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@drumgame.com';

$email_subject = 'Nuevo mensaje de contacto';

$email_body = "Nombre de usuario: $name.\n".
                "Correo del usuario: $visitor_email.\n".
                 "Asunto: $subject.\n".
                  "Mensaje: $message.\n";

$to = "drumgame@yopmail.com";

$headers = "De: $email_from \r\n";
$headers .= "Respondiendo a: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contacto.html");

?>