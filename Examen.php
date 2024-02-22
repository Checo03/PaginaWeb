<?php
include("preguntas.php");

shuffle($preguntas);
$NumPreguntas = 10;

date_default_timezone_set("America/Mexico_City");
$fecha = date('H:i:s');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="shortcut icon" href="Media\Favicon\imgFavicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/ExamenStyle.css">
    <script>
        function actualizarHora() {
            const fechaElement = document.querySelector(".Fecha");
            const ahora = new Date();
            const horaActual = ahora.toLocaleTimeString('es-MX');
            fechaElement.textContent = horaActual;
        }
        setInterval(actualizarHora, 1000);

        actualizarHora();
    </script>
</head>
<body>
    <?php if (isset($_SESSION['Visitado'])){ ?>
        <div class="InicioError">
            <h4>Error</h4>
            <p>Usted Ya A Realizado El Examen</p>
        </div>
    <?php } else { ?>
        <form method="post" action="Calificacion.php">
            <h2 style="text-align: center;">Examen De Conocimientos Basicos</h2>
            <p class='Fecha'><?php echo $fecha; ?></p>
            <?php
                for ($i = 0; $i < $NumPreguntas; $i++) {
                    $aux = $preguntas[$i];
                    echo "<div class='Pregunta'>";
                    echo "<p><b>" . ($i + 1) . ". " . $aux['pregunta'] . "</b></p>";

                    $opciones = $aux['opciones'];
                    $ArregloOpciones = array_keys($opciones);
                    shuffle($ArregloOpciones);

                    echo "<ul class='list'>";
                    foreach ($ArregloOpciones as $opcion) {
                        echo "<li class='list-item'>";
                        echo "<label><input type='radio' class='radio-btn' name='pregunta" . ($i + 1) . "' value='" . $opcion . "'>" . $opciones[$opcion] . "</label><br>";
                        echo "</li>";
                    }
                    echo "</ul></div><br>";
                }
            ?>
            <input type="submit" value="Enviar respuestas">
        </form>
    <?php } ?>
</body>
</html>



