<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    // Incluye el autoload de PHPMailer
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    
    include("preguntas.php");

    $calificacion=0;

    if ($_SERVER["REQUEST_METHOD"] === "POST" ){
        for($i=0; $i<10; $i++){
            $pregunta = "pregunta" . ($i + 1);
            if(isset($_POST[$pregunta])){
                $respuestaUsuario = $_POST[$pregunta];
                $respuestasUsuario[] = $respuestaUsuario;
            }
        }
    }

    if (!empty($respuestasUsuario)) {
        for($i=0; $i<count($respuestasUsuario); $i++){
            if($respuestasUsuario[$i] == 'A'){
                $calificacion++;
            }
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Media\Favicon\imgFavicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/CalificacionStyle.css">
    <title>Document</title>
   
</head>
<body>
    <div> <!-- Encabezado -->

    </div>
    <div class="container">
        <?php
            if ($calificacion >= 7) { ?>
               
                <?php
                session_start();
                $nombre=$_SESSION["nombre"];
                $apellidoPa=$_SESSION["apellidoP"];
                $apellidoMa=$_SESSION["apellidoM"];
                  // Configurar el servidor SMTP
                 /* $mail = new PHPMailer(true);
                try {
                   
                    $mail->isSMTP();
                    $mail->Host = 'smtp.office365.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'synergyEmp10@outlook.com';
                    $mail->Password = 'empresaEsc15';
                    $mail->SMTPSecure = 'STARTTLS';
                    $mail->Port = 587;
                    // Configura el remitente y el destinatario
                    $mail->setFrom('synergyemp10@outlook.com', 'Synergy');
                    $mail->addAddress('synergyemp10@outlook.com', $nombre);
            
                    // Contenido del correo
                    $mail->isHTML(true);
                    $mail->Subject = 'Examen Aprobado';
                    $mail->Body    = "Le informamos que el aspirante de nombre: $nombre de apellido paterno: $apellidoPa y apellido materno $apellidoMa ha sido seleccionado para formar parte de la empresa Synergy, por lo que es importante presentar la siguiente documentacion:<br> Curriculum vitae, 3 fotografias tamaño infantil, copia del acta de nacimiento y curp, asi como un comprobante de domicilio. Ademas le comunicamos estar atento a su correo para comunicarle sus respectivos horarios, asi como la fecha de su presentacion (L-V 8:00-16:00hrs) tentaivamente";
            
                    // Enviar el correo
                    $mail->send();*/
                    ?>
                     <div class="Cuadro">
                    <h1 class="animacion">¡¡¡FELICIDADES!!!</h1>
                    <p>Felicidades por ser aceptado en Synergy. Este logro es el resultado de tu arduo trabajo y talento. Tu capacidad y dedicación te han llevado a este punto, y estás en el camino correcto para un futuro exitoso en esta empresa innovadora. Siempre mantén esa pasión y determinación, y sigue avanzando. Synergy es un lugar donde tus talentos pueden florecer, y tus contribuciones serán valoradas. ¡Estás en el camino correcto para una carrera emocionante y llena de posibilidades en Synergy!</p>
                    <form method="post" action="correoAprobado.php">  
                        <h2 class="mb-4">Datos para enviar correo</h2>
                        <div class="form-group">
                            <label for="nombreR">Correo electronico</label>
                            <input type="text" class="form-control" id="correo" name="correo" required>
                        </div>
                        <div class="form-group">
                            <label for="apellidoPR">Contraseña correo</label>
                            <input type="text" class="form-control" id="contraC" name="contraC" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                
                      
               
            <?php } else { ?>    
                <?php
                session_start();
                $nombre=$_SESSION["nombre"];
                $apellidoPa=$_SESSION["apellidoP"];
                $apellidoMa=$_SESSION["apellidoM"];
                /*$mail = new PHPMailer(true);
                try {
                    
                  
                    $mail->isSMTP();
                    $mail->Host = 'smtp.office365.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'synergyEmp10@outlook.com';
                    $mail->Password = 'empresaEsc15';
                    $mail->SMTPSecure = 'STARTTLS';
                    $mail->Port = 587;
                    // Configura el remitente y el destinatario
                    $mail->setFrom('synergyemp10@outlook.com', 'Synergy');
                    $mail->addAddress('synergyemp10@outlook.com', $nombre);
            
                    // Contenido del correo
                    $mail->isHTML(true);
                    $mail->Subject = 'Examen No Aprobado';
                    $mail->Body    = "Le informamos que el aspirante de nombre: $nombre de apellido paterno: $apellidoPa y apellido materno $apellidoMa no ha sido seleccionado para formar parte de la empresa Synergy, esto al no cubrir los requerimientos de conocimientos basicos que necesita la empresa para cumplir sus necesidades. Sin embargo, dentro de Synergy ofrecemos cursos de capacitacion para una posible re aplicacion a la empresa dentro de 6 meses activos despues de la fecha, para mas informacion contactar al numero 4498769123";
            
                    // Enviar el correo
                    $mail->send();*/
                    ?>
                   <div class="Cuadro">
                    <h1 class="animacion">¡¡¡MALAS NOTICIAS!!!</h1>
                    <p>No has aprobado el examen, llena los datos con la informacion de tu correo para continuar, este correo debe ser outlook forzozamente</p>
                    
                <form method="post" action="correoReprobado.php">  <!-- Vuele Al Inicio De la Página -->
                        <h2 class="mb-4">Datos para enviar correo</h2>
                        <div class="form-group">
                            <label for="nombreR">Correo electronico</label>
                            <input type="text" class="form-control" id="correo" name="correo" required>
                        </div>
                        <div class="form-group">
                            <label for="apellidoPR">Contraseña correo</label>
                            <input type="text" class="form-control" id="contraC" name="contraC" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        
    
                </form>
            
                </div>
                
                
                <?php
                
              
                
                
             } ?>
    </div>
<div> <!-- Pie de Pagina -->

</div>

</body>
</html>
