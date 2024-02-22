<?php 

ob_start(); //por si no funciona el header location (activa almacenamiento en buffer de salida)
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"]; //nombre del servidor(dominio) en el que estas actualmente

session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InicioExamen</title>
    <link rel="shortcut icon" href="Media\Favicon\imgFavicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/IniciarExStyle.css">
</head>
<body>
    <?php /*if (isset($_SESSION['examen_accedido'])) { ?> 
        <div class="InicioError">
            <h4>Error</h4>
            <p>No Ha Inicado Sesión :c</p>
        </div>
    <?php } else{ ?>
        <!-- Aqui Poner Todo el Codigo -->
    <?php } */?>

    <div class="FondoContainer">
        <div class="container">
            <div  class="Aviso">
                <h1>Aviso!!!</h1>
                <p class="AvisoSub">Oportunidad de Empleo!</p>
                <p>Nos complace anunciar una emocionante oportunidad para todos aquellos que deseen unirse a nuestro equipo en Synergy, una empresa líder en el mundo de la tecnología y la innovación. Estamos en la búsqueda de talentosos programadores que posean una sólida comprensión de los conceptos básicos de la programación. Si estás listo para un nuevo desafío y deseas formar parte de nuestro equipo, sigue leyendo para obtener más detalles.</p>
                <br>
                <p class="AvisoSub">Examen de Conceptos Básicos de Programación</p>
                <p>Para evaluar tu aptitud y conocimiento en programación, hemos diseñado un examen exhaustivo que cubre los conceptos fundamentales de la programación. Este examen será tu pasaporte para un emocionante futuro en Synergy. Queremos asegurarnos de que nuestros futuros empleados tengan una base sólida en programación antes de unirse a nuestro equipo.</p>
                <p>El examen incluirá preguntas sobre temas como variables, estructuras de control, funciones, algoritmos y resolución de problemas. Será una oportunidad para demostrar tu habilidad para escribir código limpio y eficiente, así como tu capacidad para resolver problemas de manera lógica.</p>
                <br>
                <p class="AvisoSub">Requisito de Calificación</p>
                <p>Para ser considerado para un puesto en Synergy, debes obtener una calificación igual o superior a 7 en el examen de conceptos básicos de programación. Esto reflejará tu capacidad para comprender y aplicar los fundamentos de la programación, que son esenciales para el éxito en nuestro entorno de trabajo.</p>
                <br>
                <p class="AvisoSub">Un Solo Intento</p>
                <p>Es importante destacar que solo tendrás un intento para completar el examen. Queremos asegurarnos de que todos los candidatos se preparen adecuadamente para la prueba, lo que refleja la importancia que damos a la preparación y la seriedad de esta oportunidad. Asegúrate de estudiar a fondo y de estar listo para dar lo mejor de ti en el examen.</p>
                <br>
                <p>Estamos emocionados de conocer a los candidatos que superen este desafío y estén listos para unirse a nuestro equipo en Synergy. La programación es una habilidad fundamental en nuestro mundo tecnológico, y esperamos que demuestres tu pasión y competencia en este campo.</p>
                <br>
                <p>¡Te deseamos mucho éxito en tu examen y esperamos dar la bienvenida a nuevos talentos a nuestro equipo!</p>
                <br>
            </div>
            <?php

            ?>
            <div>
                <form method="post" action="Examen.php">
                    <button class="Boton" name="continuar">COMENZAR EXAMEN</button>
                </form>
        </div>  
    </div>
    

    <div> <!-- Pie de Pagina -->

    </div>
    
</body>
</html>