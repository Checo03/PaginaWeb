<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Incluye el autoload de PHPMailer
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

session_start();
$nombre=$_SESSION["nombre"];
$apellidoPa=$_SESSION["apellidoP"];
$apellidoMa=$_SESSION["apellidoM"];
$correoU=$_POST["correo"];
$contraC=$_POST["contraC"];

$mail = new PHPMailer(true);
try {
   
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true;
    $mail->Username = $correoU;
    $mail->Password = $contraC;
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Port = 587;
    // Configura el remitente y el destinatario
    $mail->setFrom($correoU, 'Synergy');
    $mail->addAddress($correoU, $nombre);

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Examen No Aprobado';
    $mail->Body    = "Le informamos que el aspirante de nombre: $nombre de apellido paterno: $apellidoPa y apellido materno $apellidoMa no ha sido seleccionado para formar parte de la empresa Synergy, esto al no cubrir los requerimientos de conocimientos basicos que necesita la empresa para cumplir sus necesidades. Sin embargo, dentro de Synergy ofrecemos cursos de capacitacion para una posible re aplicacion a la empresa dentro de 6 meses activos despues de la fecha, para mas informacion contactar al numero 4498769123";
    $rutaImagen = 'Media/MediaExamen/firmaD.png'; 
    $mail->addAttachment($rutaImagen, 'imagen_Firma.png');
    

    // Enviar el correo
    $mail->send();
    echo "El mensaje ha sido enviado.";
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}





?>