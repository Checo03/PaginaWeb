<?php
ob_start();
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php

    $nombre = $_POST["nombre"];
    $apellidoP=$_POST["apellidoP"];
    $apellidoM=$_POST["apellidoM"];
    $contra = $_POST["passwd"];



    $file = fopen("registroU.txt", "r");
    $band = 0; //para saber si la cuenta y contrasena estan en el archivos
    while (!feof($file)) {
        $linea = fgets($file); //lee linea por linea el archivo
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea);   //separa por espacios lo que lee de cada linea
                                            
            $nomU = $aux[0];
            $apePU=$aux[1];
            $apeMU=$aux[2];
            $contrasena = $aux[3];

            if ($nomU === $nombre && $apePU==$apellidoP && $apeMU==$apellidoM && $contrasena === $contra) {
                $band = 1;
                break;
            }
        }
    }
    fclose($file);

    # Luego de haber obtenido los valores, ya podemos comprobar:
    if ($band == 1) {

        session_start();

        $_SESSION["nombre"] = $nombre;
        $_SESSION["apellidoP"] = $apellidoP;
        $_SESSION["apellidoM"] = $apellidoM;
        
        # Luego redireccionamos a la pagina "Secreta"
        # redireccionamiento con php
        header("Location: Inicio_Form.php");
        //header("Location:".$base_url."secreta.php");

        
    } else {
        echo '<div class="alert alert-warning text-center" role="alert">';
        echo '<h4 class="alert-heading">Aún no posees tu clave de acceso</h4>';
        echo '<p>Llena el formulario de contacto para obtener la clave y empezar el examen</p>';
        echo ' <a href="formRegistro.php" class="alert-link">Regresar</a>.';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';
        
       
        

    }

    ?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>