<?php
 $nombre = $_POST["nombreR"];
 $apellidoP=$_POST["apellidoPR"];
 $apellidoM=$_POST["apellidoMR"];
 $contra = $_POST["passwdR"];

//Verificacion de que no exista ya la cuenta en el archivo
 $file = fopen("registroU.txt", "r");
 $band = 0; 
 while (!feof($file)) {
     $linea = fgets($file);
     if ($linea != "") {
         $aux = preg_split("/[\s,]+/", $linea);   //divide la linea que se leyo en fgets en delimitadores, para separarla, las separa por espacios en blanco y/o comas
         $nombreU = $aux[0];
         $apellidoUP=$aux[1];
         $apellidoUM=$aux[2];
         $contrasena = $aux[3];

         if ($nombreU === $nombre && $apellidoUP==$apellidoP && $apellidoUM==$apellidoM && $contrasena !=$contra) {
            $band = 1;
            break;
        }

         if ($nombreU === $nombre && $apellidoUP==$apellidoP && $apellidoUM==$apellidoM && $contrasena ==$contra) {
             $band = 1;
             break;
         }
     }
 }
 fclose($file);

 if($band==1) {
    echo '<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">';
    echo '<h3 class="alert-heading">¡Advertencia!</h3>';
    echo 'Ya existe la cuenta que deseas registrar';
    echo ' <a href="formRegistro.php" class="alert-link">Regresar</a>.';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';

 }
 else {
    $file = fopen("registroU.txt","a+");
    fwrite($file, $nombre." ".$apellidoP." ".$apellidoM." ".$contra."\r\n"); //escribe dentro del archivo el nombre del usuario, un espacio y despues la contraseña, seguido de un salto de linea para el sig registro
    echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">';
    echo '<h4 class="alert-heading">¡Registro exitoso!</h4>';
    echo 'El registro se ha creado con éxito. ';
    echo ' <a href="formRegistro.php" class="alert-link">Loguearte</a>.';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';
    
    fclose($file);
  
 }






?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio de Sesión y Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <body>
        
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>