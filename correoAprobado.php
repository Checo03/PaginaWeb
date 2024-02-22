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
    $mail->Subject = 'Examen Aprobado';
    $mail->Body    = "Le informamos que el aspirante de nombre: $nombre de apellido paterno: $apellidoPa y apellido materno $apellidoMa ha sido seleccionado para formar parte de la empresa Synergy, por lo que es importante presentar la siguiente documentacion:<br> Curriculum vitae, 3 fotografias tamaño infantil, copia del acta de nacimiento y curp, asi como un comprobante de domicilio. Ademas le comunicamos estar atento a su correo para comunicarle sus respectivos horarios, asi como la fecha de su presentacion (L-V 8:00-16:00hrs) tentaivamente";
    $rutaImagen = 'Media/MediaExamen/firmaD.png'; 
    $mail->addAttachment($rutaImagen, 'imagen_Firma.png');

    // Enviar el correo
    $mail->send();
    echo "El correo se ha sido enviado.";
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}





?>