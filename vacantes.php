<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="estiloVacantes.css">
    <title>Vacantes</title>
</head>
<body>
<?php
ob_start(); //por si no funciona el header location (activa almacenamiento en buffer de salida)
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"]; //nombre del servidor(dominio) en el que estas actualmente


# Iniciar sesión para usar $_SESSION
session_start();

if (empty($_SESSION["nombre"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: formRegistro.php");
    # Y salimos del script
    exit();
} else { 
   echo' <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #0F3057;" role="navigation">
        <div class="container">
            <a href="Inicio_Form.php"><img src="images/logo_m.jpeg" style="height: 50px; width: 50px;"></a>
            <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                <ul class="nav navbar-nav" style="font-size: 17px;">
                    <li class="nav-item" style="margin-left: 230px; margin-right: 40px;"><a href="Inicio_Form.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item" style="margin-right: 40px;"><a href="pag_extra.php" class="nav-link">Software</a></li>
                    <li class="nav-item" style="margin-right: 40px;"><a href="pag2_extra.php" class="nav-link">Contactanos</a></li>
                    
                </ul>';
                date_default_timezone_set('America/Mexico_City'); 
                $hora = date('H');

                if ($hora >= 6 && $hora < 12) {
                    $mensajeUsuario = 'Buenos días';
                } elseif ($hora >= 12 && $hora < 18) {
                    $mensajeUsuario = 'Buenas tardes';
                } else {
                    $mensajeUsuario = 'Buenas noches';
                }
                echo "<div style='color: burlywood;'>";
                echo "$mensajeUsuario, ".$_SESSION["nombre"];
                echo "</div>"; 
                echo '<li class="nav-item"><a href="logout.php" class="btn btn-outline-primary" >Cerrar Sesión</a></li>';
            echo '</div>
        </div>
    </nav>';
    echo '<br><br>';
    echo ' <div class="containerCard">
    <div class="card">
        <img src="Media/MediaExamen/mision.jpg" alt="Misión" >
        <div class="content">
            <h2>Misión</h2>
            <p>En Synergy, nuestra misión es transformar ideas en experiencias digitales excepcionales. Reclutamos y nutrimos el talento de jóvenes promesas y experimentados veteranos, uniendo pasión, creatividad y conocimiento técnico para entregar soluciones web innovadoras y de alta calidad que superen las expectativas de nuestros clientes.</p>
        </div>
    </div>
    <div class="card">
        <img src="Media/MediaExamen/vision.jpg" alt="Visión">
        <div class="content">
            <h2>Visión</h2>
            <p>Nos visualizamos como líderes en la industria del desarrollo web, reconocidos por nuestra dedicación a la excelencia y la innovación. Aspiramos a ser un ambiente donde la creatividad y la experiencia se fusionen para crear soluciones tecnológicas que impulsen el éxito de nuestros clientes y promuevan un impacto positivo en la sociedad</p>
        </div>
    </div>

    <div class="card">
        <img src="Media/MediaExamen/valores.jpg" alt="Valores">
        <div class="content">
            <h2>Valores</h2>
            <p>
                <ul>
                    <li>Excelencia Tecnica: Nos comprometemos a mantener los mas altos estandares de calidad en el desarrollo web, aprovechando la experiencia y el conocimiento tecnico de nuestros talentosos equipos.</li>
                    <li>Colaboración y Comunidad: Fomentamos un entorno de trabajo colaborativo donde la diversidad de ideas y perspectivas es celebrada. Trabajamos juntos para alcanzar objetivos comunes.</li>
                    <li>Innovación Constante: Abrazamos el cambio y la evolución tecnológica. Buscamos constantemente nuevas formas de abordar desafíos y mejorar nuestras soluciones.</li>
                    <li>Pasión por el Desarrollo: Nutrimos la pasión por la programación y el desarrollo web en todos los miembros de nuestro equipo, promoviendo un ambiente donde la creatividad florezca.</li>
                </ul>
            </p>
        </div>
    </div>
</div>';

echo '<div class="container2">
<h2 class="text-center mb-4">Formulario de Solicitud de empleo</h2>
<form action="generarPDF.php" method="post" enctype="multipart/form-data">
       <div class="form-row">
           <div class="form-group col-md-4">
               <label for="nombre">Nombre</label>
               <input type="text" class="form-control" id="nombre" name="nombre" value='.$_SESSION["nombre"].' readonly>
           </div>
           <div class="form-group col-md-4">
               <label for="apellido_paterno">Apellido Paterno</label>
               <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value='.$_SESSION["apellidoP"].' disabled>
           </div>
           <div class="form-group col-md-4">
               <label for="apellido_materno">Apellido Materno</label>
               <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value='.$_SESSION["apellidoM"].' disabled>
           </div>
       </div>
       <div class="form-row">
           <div class="form-group col-md-6">
               <label for="edad">Edad</label>
               <input type="number" class="form-control" id="edad" name="edad" required>
           </div>
           <div class="form-group col-md-6">
               <label for="telefono">Teléfono</label>
               <input type="tel" class="form-control" id="telefono" name="telefono" required>
           </div>
       </div>
       <div class="form-group">
           <label for="imagen">Cargar Imagen</label>
           <input type="file" class="form-control-file" id="imagen" name="imagen" required>
       </div>
       <div class="form-row">
           <div class="form-group col-md-2">
               <label for="dia">Día</label>
               <input type="number" class="form-control" id="dia" name="dia" min="1" max="31" required>
           </div>
           <div class="form-group col-md-4">
               <label for="mes">Mes</label>
               <input type="number" class="form-control" id="mes" name="mes" min="1" max="12" required>
           </div>
           <div class="form-group col-md-6">
               <label for="ano">Año</label>
               <input type="number" class="form-control" id="ano" name="ano" min="1900" max="2023" required>
           </div>
       </div>
       <div class="form-group">
           <label for="lenguajes">Lenguajes de Programación</label><br>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="lphp" value="lphp">
               <label class="form-check-label" for="html">PHP</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="javascript" value="javascript">
               <label class="form-check-label" for="css">JavaScript</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="python" value="python">
               <label class="form-check-label" for="python">Python</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="lenguajeC" value="lenguajeC">
               <label class="form-check-label" for="lenguajeC">C</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="java" value="java">
               <label class="form-check-label" for="java">Java</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="cmm" value="cmm">
               <label class="form-check-label" for="cmm">C++</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="sql" value="sql">
               <label class="form-check-label" for="sql">SQL</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="csharp" value="csharp">
               <label class="form-check-label" for="cgato">C#</label>
           </div>
       </div>
       <div class="form-group">
           <label>Disponibilidad para Viajar</label><br>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="viajar" id="viajar_si" value="si">
               <label class="form-check-label" for="viajar_si">Sí</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="viajar" id="viajar_no" value="no">
               <label class="form-check-label" for="viajar_no">No</label>
           </div>
       </div>
       <div class="form-group">
           <label for="ingles">¿Habla Inglés?</label><br>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="ingles" id="ingles_si" value="si">
               <label class="form-check-label" for="ingles_si">Sí</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="ingles" id="ingles_no" value="no">
               <label class="form-check-label" for="ingles_no">No</label>
           </div>
       </div>
       <div class="form-group">
           <label for="puesto">Puesto de Trabajo</label>
           <select class="form-control" id="puesto" name="puesto" required>
               <option value="desarrollador_web">Desarrollador Web</option>
               <option value="disenador_ui">Diseñador UI</option>
               <option value="ciberseguridad">Ciberseguridad</option>
               <option value="programador">Programador</option>
               <option value="analista">Analista</option>
               <option value="gerente_proy">Gerente de proyectos</option>
               <option value="data_science">Data Science</option>
               <option value="programador_jr">Programador Jr</option>
           </select>
       </div>
       <button type="submit" class="btn btn-primary">Enviar</button>
   </form>
   </div>';
   echo '
   <div class="contenedorExamen_Aside">
   <aside class="informacionPerfil">
       <h2>Que estamos buscando...</h2>
       <ul>
           <li><b>Desarrollador Web: </b>
           Un desarrollador web es un profesional que se especializa en la creación y mantenimiento de aplicaciones y sitios web. Esto implica trabajar con lenguajes de programación como HTML, CSS, JavaScript y utilizar marcos de trabajo (frameworks)</li>
           <li><b>Responsable de CiberSeguridad: </b>
           Este profesional se encarga de proteger los sistemas de información y la infraestructura digital de una organización contra amenazas y ataques cibernéticos. Esto implica identificar y mitigar riesgos, establecer políticas de seguridad, implementar medidas de prevención y respuesta a incidentes</li>
           <li><b>Gerente de proyectos: </b>
           Un gerente de proyectos es responsable de planificar, ejecutar y supervisar proyectos desde su inicio hasta su finalización. Esto incluye definir objetivos, asignar recursos, establecer plazos y asegurarse de que el proyecto se complete dentro del alcance y presupuesto previsto</li>
           
       </ul>
   </aside>

   <div class="contenedorGE">
       <div class="test" onclick="mostrarVentana()">
           <img src="gifExamen.gif" alt="GIF">
           <div class="leyenda">Clic en la imagen para comenzar el test</div>
       </div>
   </div>

   <aside class="beneficios">
   <h2>Únete a Synergy</h2>
   <p>En Synergy, no solo creamos código, creamos soluciones innovadoras que impulsan el futuro. Si eres apasionado por la programación y buscas un lugar donde tu talento florezca, has llegado al lugar indicado.</p>
   <p>Nuestra cultura se basa en el aprendizaje constante, la colaboración y la excelencia técnica. Aquí, cada línea de código es una oportunidad para marcar la diferencia.</p>
   <ul>
       <li>Sueldo competitivo</li>
       <li>Prestaciones de ley</li>
       <li>Entorno de trabajo colaborativo</li>
       <li>Oportunidades de crecimiento y desarrollo profesional</li>
       <li>Proyectos emocionantes y desafiantes</li>
       <li>Flexibilidad y equilibrio entre trabajo y vida personal</li>
   </aside>
</div>

<div class="ventana-emergente" id="ventana">
   <form action="comprobarClave.php" method="post">
       <label for="clave">Clave de acceso:</label>
       <input type="password" id="clave" name="clave">
       <button type="submit">Enviar</button>
       <button type="button" onclick="cerrarVentana()">Cerrar</button>
   </form>
</div>
<div class="contenedorVideo">
<iframe width="560" height="315" src="https://www.youtube.com/embed/hbHcHqK7kxU?si=J6SRULhJf-siHqb0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="leyendaVideo">Guia de un buen trabajador de desarrollo de software.</div>
</div>

    <script>
        function mostrarVentana() {
            document.getElementById("ventana").style.display = "block";
        }
        function cerrarVentana() {
            document.getElementById("ventana").style.display = "none";
        }
    </script>';
    $nombreC=$_SESSION["nombre"];
    $apellidoPC= $_SESSION["apellidoP"];
    $apellidoMC=$_SESSION["apellidoM"];
    $file = fopen("registroF.txt", "r");
    $band = 0; 
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea);   //divide la linea que se leyo en fgets en delimitadores, para separarla, las separa por espacios en blanco y/o comas
            $nombreU = $aux[0];
            $apellidoUP=$aux[1];
            $apellidoUM=$aux[2];
            $claveUsu = $aux[3];

            if ($nombreU === $nombreC && $apellidoUP==$apellidoPC && $apellidoUM==$apellidoMC) {
                $claveExamen=$claveUsu;
                $band=1;
                break;
            }
        }
    }
    fclose($file);
    if($band==0) {
        echo '<div class="alert alert-warning text-center" role="alert">';
        echo '<h4 class="alert-heading">Aún no posees tu clave de acceso</h4>';
        echo '<p>Llena el formulario de contacto para obtener la clave y empezar el examen</p>';
        echo '</div>';
    } else {
        echo '<div class="alert alert-success text-center" role="alert">';
        echo '<h4 class="alert-heading">¡Tu clave de acceso al examen es: ' . $claveExamen . '</h4>';
        echo '<p>Recuerda que la clave es valida solamente una vez, y aqui tienes un recordatorio para evitar errores</p>';
        echo '</div>';
    }
}

?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
