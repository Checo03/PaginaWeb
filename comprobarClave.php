<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Comprobar clave</title>
</head>
<body>

<?php
session_start();
$nombreC=$_SESSION["nombre"];
$apellidoPC= $_SESSION["apellidoP"];
$apellidoMC=$_SESSION["apellidoM"];
$claveE=$_POST["clave"];
$file = fopen("registroE.txt", "r");
$file2 = fopen("registroF.txt", "r");
 $band = 0;
 $band2=0; 
 while (!feof($file)) {
     $linea = fgets($file);
     if ($linea != "") {
         $aux = preg_split("/[\s,]+/", $linea);   //divide la linea que se leyo en fgets en delimitadores, para separarla, las separa por espacios en blanco y/o comas
         $nombreU = $aux[0];
         $apellidoUP=$aux[1];
         $apellidoUM=$aux[2];
         $contrasena = $aux[3];

         if ($nombreU == $nombreC && $apellidoUP==$apellidoPC && $apellidoUM==$apellidoMC && $contrasena !=$claveE) {
             $band = 2;
             break;
         }
         if ($nombreU == $nombreC && $apellidoUP==$apellidoPC && $apellidoUM==$apellidoMC && $contrasena ==$claveE) {
            $band = 1;
            break;
        }
     }
 }
 fclose($file);
 while (!feof($file2)) {
    $linea2 = fgets($file2);
    if ($linea2 != "") {
        $aux2 = preg_split("/[\s,]+/", $linea2);   //divide la linea que se leyo en fgets en delimitadores, para separarla, las separa por espacios en blanco y/o comas
        $nombreT = $aux2[0];
        $apellidoUPT=$aux2[1];
        $apellidoUMT=$aux2[2];
        $contrasenaU = $aux2[3];

        if ($nombreT == $nombreC && $apellidoUPT==$apellidoPC && $apellidoUMT==$apellidoMC && $contrasenaU ==$claveE) {
           $band2 = 1;
           break;
       }
    }
}
fclose($file2);



 

 if (($band == 1 || $band ==2) ) {
    echo '<div class="alert alert-warning text-center mx-auto" role="alert">';
    echo '<h4 class="alert-heading">Ya realizaste el examen y/o la clave de acceso es erronea</h4>';
    echo '<a href="vacantes.php" class="alert-link">Regresar</a>.';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '<br>';
    echo '<img src="Media/MediaExamen/errorP.png"  width="300" height="290">';
    echo '</div>';

 }
 else if($band2!=1){
    echo '<div class="alert alert-warning text-center mx-auto" role="alert">';
    echo '<h4 class="alert-heading">Ya realizaste el examen y/o la clave de acceso es erronea</h4>';
    echo '<a href="vacantes.php" class="alert-link">Regresar</a>.';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '<br>';
    echo '<img src="Media/MediaExamen/errorP.png"  width="300" height="290">';
    echo '</div>';

 }
 else {
    $file = fopen("registroE.txt","a+");
    fwrite($file, $nombreC." ".$apellidoPC." ".$apellidoMC." ".$claveE."\r\n"); //escribe dentro del archivo el nombre del usuario, un espacio y despues la contraseña, seguido de un salto de linea para el sig registro
    echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">';
    echo '<h4 class="alert-heading">¡Registro exitoso!</h4>';
    echo 'Haz tomado tu oportunidad de hacer el examen, buena suerte';
    echo ' <a href="formRegistro.php" class="alert-link">Loguearte</a>.';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';
    
    fclose($file);
    header("Location: iniciarExamen.php");

 }

   







?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
