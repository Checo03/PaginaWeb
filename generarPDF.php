<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Registro Formulario</title>
</head>
<body>


<?php
ob_start();
session_start();
require('fpdf/fpdf.php');
//disabled no deja enviar los datos por post
//echo $_POST["nombre"];
$nombre =$_SESSION["nombre"];
$apellidoP=$_SESSION["apellidoP"];
$apellidoM =$_SESSION["apellidoM"];
$edad = $_POST["edad"];
$telefono = $_POST["telefono"];
$imagen = $_FILES["imagen"]["name"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$lenguajes =$_POST["lenguajes"];
$viajar = $_POST["viajar"];
$ingles = $_POST["ingles"];
$puesto = $_POST["puesto"];
$file = fopen("registroF.txt", "r");

 $band = 0; 
 while (!feof($file)) {
     $linea = fgets($file);
     if ($linea != "") {
         $aux = preg_split("/[\s,]+/", $linea);   //divide la linea que se leyo en fgets en delimitadores, para separarla, las separa por espacios en blanco y/o comas
         $nombreU=$aux[0];
         $apeP=$aux[1];
         $apeM=$aux[2];

         if ($nombreU === $nombre && $apeP === $apellidoP && $apeM==$apellidoM) {
             $band = 1;
             break;
         }
     }
 }
 fclose($file);

 if($band==1) {
    echo '<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">';
    echo '<h3 class="alert-heading">¡Advertencia!</h3>';
    echo 'Ya has llenado el formulario de solicitud una vez, por lo que no puedes volver a hacerlo';
    echo 'Si aun no has hecho el examen, hazlo con la clave de acceso proporcionada';
    echo ' <a href="vacantes.php" class="alert-link">Regresar</a>.';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';

 }
 else {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ#@!+?}[{';
        $clave = '';
        
        for ($i = 0; $i < 8; $i++) {
            $indice = rand(0, strlen($caracteres) - 1);
            $clave .= $caracteres[$indice];
        }
    $file = fopen("registroF.txt","a+");
    fwrite($file, $nombre." ".$apellidoP." ".$apellidoM." ".$clave."\r\n"); //escribe dentro del archivo el nombre del usuario, un espacio y despues la contraseña, seguido de un salto de linea para el sig registro
    echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">';
    echo '<h4 class="alert-heading">¡Registro exitoso!</h4>';
    echo 'El registro se ha creado con éxito. ';
    echo ' <a href="vacantes.php" class="alert-link">Vacantes</a>.';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';
    $lenguajesC = implode(',', $lenguajes);
    fclose($file);
    echo '<form action="docPDF.php" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control" id="nombre" name="nombre" value='.$_SESSION["nombre"].' hidden>
                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value='.$_SESSION["apellidoP"].' hidden>
                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value='.$_SESSION["apellidoM"].' hidden>
                <input type="number" class="form-control" id="edad" name="edad" value='.$edad.' hidden>
                <input type="tel" class="form-control" id="telefono" name="telefono" value='.$telefono.' hidden>
                <input type="file" class="form-control-file" id="imagen" name="imagen" value='.$imagen.' hidden>
                <input type="number" class="form-control" id="dia" name="dia" min="1" max="31" value='.$dia.' hidden>
                <input type="number" class="form-control" id="mes" name="mes" min="1" max="12" value='.$mes.' hidden>
                <input type="number" class="form-control" id="ano" name="ano" min="1900" max="2023" value='.$ano.' hidden>
                <input type="text" name="lenguajes" value='.$lenguajesC.' hidden>
                <input type="text" name="viajar" value='.$viajar.' hidden>
                <input type="text" name="ingles" value='.$ingles.' hidden>
                <input type="text" name="puesto" value='.$puesto.' hidden>
                <input type="text" name="claveE" value='.$clave.' hidden>
                <button type="submit" class="btn btn-primary">Generar y/o descargar PDF</button>
   </form>';

  
 }




?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
