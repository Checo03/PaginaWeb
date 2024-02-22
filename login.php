<?php
    ob_start(); //por si no funciona el header location (activa almacenamiento en buffer de salida)
    $config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"]; //nombre del servidor(dominio) en el que estas actualmente
    require 'Inicio_Form.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Inicio</title>
</head>

<body>

    <?php

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];


    $file = fopen("Usuarios.txt", "r");
    $flag = 0; 
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea);
            $user = $aux[0];
            $pass = $aux[1];

            if ($user === $usuario && $pass === $password) {
                $flag = 1;
                break;
            }
        }
    }
    fclose($file);

    if ($flag == 1) {

        session_start();

        $_SESSION["usuario"] = $usuario;

        # Luego redireccionamos a la pagina "Inicio"
        header("Location: Inicio_Form.php");
        
    } else {
        # No coinciden
        echo '<script type="text/javascript">
                function show() {
                    if(confirm("El usuario o la contraseña son incorrectos")){
                        window.location = "Inicio_Form.php";
                    }
                }
            </script>';
        echo '<script type="text/javascript">
                show();
            </script>';
        
        /* echo '<div  style="width:50%; margin:100px;" class="alert alert-warning alert-dismissible fade show" role="alert">';
            echo "<p style='text-align:center;'>El usuario o la contraseña son incorrectos</p>";
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo    '<span aria-hidden="true">&times;</span>';
            echo '</button>';
        echo "</div>"; */

    }

?>