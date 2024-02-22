<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¿Qué es el desarrollo de software?</title>
  <!-- Agrega el enlace al CSS de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="css/extra.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo_final.jpeg" />
</head>
<body>
    <br><br>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #0F3057;" role="navigation">
        <div class="container">
            <a href="Inicio_Form.php"><img src="images/logo_m.jpeg" style="height: 50px; width: 50px;"></a>
            <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                <ul class="nav navbar-nav" style="font-size: 17px;">
                    <li class="nav-item" style="margin-left: 230px; margin-right: 40px;"><a href="Inicio_Form.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item" style="margin-right: 40px;"><a href="pag_extra.php" class="nav-link">Software</a></li>
                    <li class="nav-item" style="margin-right: 40px;"><a href="pag2_extra.php" class="nav-link">Contactanos</a></li>
                    <?php
                        if (isset($_SESSION["nombre"])) {
                            echo '<li class="nav-item" style="margin-right: 40px;"><a href="vacantes.php" class="nav-link">Vacantes</a></li>';
                        }
                    ?>
                </ul>
                <?php
                    if (empty($_SESSION["nombre"])) {
                        echo '<ul class="nav navbar-nav flex-row justify-content-between ml-auto">';
                            echo '<li class="dropdown order-1">';
                                echo '<a href="formRegistro.php">Login </a>';
                                /*echo '<ul class="dropdown-menu dropdown-menu-right mt-2">';
                                echo '<li class="px-3 py-2">';
                                    echo '<form class="form" role="form" action="login.php" method="post">';
                                            echo '<div class="form-group">';
                                                echo '<input name="usuario" id="usuario" placeholder="Email" class="form-control form-control-sm" type="text" required>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                                echo '<input name="password" id="password" placeholder="Contraseña" class="form-control form-control-sm" type="password" required>';
                                            echo '</div>';
                                            
                                            echo '<div class="form-group">';
                                                echo '<button type="submit" class="btn btn-primary btn-block">Login</button>';
                                            echo '</div>';
                                            echo '<div class="form-group text-center">';
                                                echo '<small><a href="#" data-toggle="modal" data-target="#modalPassword">Registrar cuenta</a></small>';
                                            echo '</div>';
                                        echo '</form>';
                                    echo '</li>';
                                echo '</ul>';*/
                            echo '</li>';
                        echo '</ul>';
                    }
                    else{
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
                    }
                ?>
            </div>
        </div>
    </nav>
    
    <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h3 style="color: white">Registro</h3>
                    <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form" role="form" action="registros.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <p class="col-md-3" style="color: white">Usuario:</p>
                        <input type="text" name="login" class="col-md-5" style="opacity: .7">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <p class="col-md-3" style="color: white">Contraseña:</p>
                        <input type="text" name="con" class="col-md-5" style="opacity: .7">
                    </div>               
                    
                </div>
                <div class="modal-footer">                
                    <div class="form-group">                  
                    <button type="submit" class="btn btn-outline-primary btn-block">Enviar Datos</button>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Nav -->


<div>
    <h1 >¿Qué es el desarrollo de software?</h1>
    <div style="text-align: center; padding: 60px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ncz1Qgg78gA?si=BVDZQmjG6dGg3hOa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <!-- Información sobre el desarrollo de software -->
    <div style="font-family: Arial, Helvetica, sans-serif; padding: 60px;">
        <p>El desarrollo de software se refiere a un conjunto de actividades informáticas dedicadas al proceso de creación, diseño, despliegue y compatibilidad de software.</p>

    <p>El software en sí es el conjunto de instrucciones o programas que le dicen a una computadora qué hacer. Es independiente del hardware y hace que las computadoras sean programables. Hay tres tipos básicos:</p>

    <ul>
      <li><strong>Software del sistema.</strong> Para proporcionar funciones básicas como sistemas operativos, administración de discos, servicios, administración de hardware y otras necesidades operacionales.</li>
      <li><strong>Software de programación.</strong> Para brindar a los programadores herramientas como editores de texto, compiladores, enlazadores, depuradores y otras herramientas para crear código.</li>
      <li><strong>Software de aplicación.</strong> Para ayudar a los usuarios a realizar tareas. Las suites de productividad de Office, el software de gestión de datos, los reproductores multimedia y los programas de seguridad son algunos ejemplos. Aplicaciones también se refiere a aplicaciones web y móviles como las que se utilizan para comprar en Amazon.com, socializar en Facebook o publicar imágenes en Instagram.</li>
    </ul>

    <p>Un posible cuarto tipo es el software integrado. El software de sistemas integrado se utiliza para controlar máquinas y dispositivos que normalmente no se consideran computadoras,
    como redes de telecomunicaciones, automóviles, robots industriales y más. Estos dispositivos, y su software, se pueden conectar como parte del Internet de las Cosas (IoT).</p>
    
    <p>El desarrollo de software lo llevan a cabo principalmente programadores, ingenieros de software y desarrolladores de software. Estos roles interactúan y se superponen, 
    y la dinámica entre ellos varía mucho entre los departamentos y comunidades de desarrollo.</p>

    <p>Los programadores, o codificadores, escriben el código fuente para programar computadoras para realizar tareas específicas como fusionar bases de datos, 
    procesar pedidos en línea, enrutar comunicaciones, realizar búsquedas o mostrar texto y gráficos. Los programadores suelen interpretar las instrucciones de 
    los desarrolladores e ingenieros de software y utilizan lenguajes de programación como C++ o Java para llevarlas a cabo.</p>

    <p>Los ingenieros de software aplican principios de ingeniería para crear software y sistemas para resolver problemas.
        Utilizan lenguaje de modelado y otras herramientas para idear soluciones que a menudo se pueden aplicar a problemas de manera general, 
        en lugar de simplemente resolver solo una instancia o un cliente específico. Las soluciones de ingeniería de software se adhieren al método científico 
        y deben funcionar en el mundo real, como con puentes o ascensores. Su responsabilidad ha aumentado a medida que los productos se han vuelto cada vez más 
        inteligentes con la adición de microprocesadores, sensores y software. No solo hay más productos que dependen del software para diferenciarse de la competencia en el mercado,
         sino que el desarrollo de su software debe coordinarse con el trabajo de desarrollo mecánico y eléctrico del producto.
    </p>

    <p>Los desarrolladores de software tienen un rol menos formal que los ingenieros y pueden participar de cerca en áreas específicas del proyecto,
    incluida la escritura de código. Al mismo tiempo, impulsan el ciclo de vida general del desarrollo de software mediante el trabajo en equipos 
    funcionales para transformar los requisitos en funciones, la gestión de equipos y procesos de desarrollo y la realización de pruebas y mantenimiento de software.</p>

    <p>El trabajo del desarrollo de software no se limita a codificadores o equipos de desarrollo. Profesionales como científicos, fabricantes de dispositivos y 
    fabricantes de hardware también crean código de software, aunque no son principalmente desarrolladores de software. Tampoco se limita a las industrias tradicionales
    de tecnología de la información, como las empresas de software o semiconductores. De hecho, según Brookings Institute (enlace externo a ibm.com), esas empresas 
    "representan menos de la mitad de las empresas que realizan desarrollo de software".</p>

    <p>Una diferencia importante es el desarrollo de software personalizado, contrario al desarrollo de software comercial.
    El desarrollo de software personalizado es el proceso de diseño, creación, despliegue y mantenimiento de software para 
    un conjunto específico de usuarios, funciones u organizaciones. Por el contrario, el software comercial listo para usar 
    (COTS) está diseñado para un amplio conjunto de requisitos, lo que permite empaquetarlo, comercializarlo y distribuirlo.
    </p>
    <div style="text-align: center; padding: 60px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/s5ABwHaN7as?si=47DOEUPQAnn6POX0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    </div>

    <h1>¿Cómo se desarrolla un software?</h1>
    <div style="text-align: center; padding: 60px;"><img src="images/image1.webp" alt="" width="400" height="230"></div>
    <section>
        <article>
            <h4>Características</h4>
            <p>Comprensión: necesita claridad y declaración de la naturaleza explícita de la definición del proceso.
               <br> Visibilidad: capacidad de observar salida de varias actividades del proceso de forma que se mida el progreso del proceso.
                <br> Confiabilidad: capacidad del proceso para evitar errores o detectarlos, manejarlos antes de que avancen en el producto.
                <br>Robustez: capacidad del proceso para no detenerse si se presentan problemas inesperados.
                <br>Facilidad de mantenimiento: cantidad de modificaciones que puede hacérsele al sistema de software sin ingresar errores.
               <br> Facilidad de verificación: el proceso es verificable cuando sus propiedades pueden verificarse fácilmente.
               <br> Rapidez: agilidad del proceso para tener la capacidad de entregar un producto final basado en las especificaciones.
               <br> Facilidad de soporte: posibilidad de que las actividades del proceso sean toleradas por el conjunto de herramientas automatizadas.
                <br>Facilidad de aceptación: capacidad del proceso para ser aceptado y usado por un equipo de ingenieros.
                <br>Facilidad de adaptación: capacidad del proceso para modificarlo en función de satisfacer las necesidades de cambio en el ambiente de desarrollo.</p>
        </article>
        <article>
            <h4>Ciclo de vida de un software</h4>
            <p>El ciclo de vida de un software (SDLC o Systems Development Life Cycle) incluye las fases que se necesitan para validar el desarrollo del software, 
                garantizando que cumpla con los requisitos necesarios para su aplicación y verificación de los procedimientos de desarrollo, certificando que los métodos usados son los correctos.

                Existe debido a que es muy caro corregir posibles errores si se detectan tarde durante la fase de implementación. SI se usan metodologías adecuadas, 
                puede detectarse a tiempo los errores, para que así los programadores se puedan enfocar en la calidad del software, cumplan los plazos y costes asociados.
                
                Siempre se debe tener presente el ciclo de vida del software, ese conjunto de reglas y prácticas que contribuyen a conectar el equipo de tecnología, los tecnólogos 
                y personas interesadas en las distintas etapas del desarrollo de un proyecto de software. Se conforma por todas las etapas del proceso de diseño de software,
                 desde el diseño inicial hasta el lanzamiento final, por lo general es complicado, pero no es imposible, necesita ciertos conocimientos para implementarlo.</p>
        </article>
    </section>
    <div >
      <div style="padding: 60px;">
        <h1 >Fases de desarrollo de un software</h1>
    <p>    Las fases de desarrollo de un software corresponden a una metodología sistemática para lograr realiza, gestionar y administrar el proyecto, llevarlo a cabo con las mayores posibilidades de éxito, el proyecto es dividido en módulos más pequeños para poder cumplir con los procesos que permitan crear el software, dichas etapas son:
    </p>
    <ul>
        <li>Planificación: esto influye directamente en el desarrollo del proyecto y su éxito, establece las fuzzy front end, estas no están sujetas a plazos, en esta fase se incluyen actividades como determinar el ámbito del proyecto, realizar estudios de viabilidad, analizar los riesgos asociados, estimar el coste del proyecto, planificación temporal y asignación de recursos a cada etapa del proyecto.</li>
        <li>Análisis: se debe indagar sobre que debe hacer exactamente el software, y es justo lo que se hace en esta etapa, descubrir lo que se necesita realmente y llegar a la compresión correcta de los requerimientos del sistema, las características que debe poseer.</li>
        <div style="text-align: center;"><img src="images/img-ana.webp" alt="" width="350" height="200" ></div>
        <li>Diseño: fase donde se estudian las opciones de implementación para el software que se debe crear, se decide también la estructura general de este, es una etapa compleja y debe llevarse a cabo de forma iterativa. Quizás la solución inicial no sea la correcta, pero se debe refinar. Hay catálogos de diseños sencillos que sirven para recoger errores que otros han cometido para evitar caer en lo mismo.</li>
        <li>Implementación: debes elegir herramientas correctas, un entorno que haga sencillo el trabajo y un lenguaje de programación adecuado para el software que quieras construir. La elección depende de las decisiones de diseño tomadas y del entorno donde va a funcionar el software.
            <ul>
                <li>Evita bloques de control no estructurados.</li>
                <li>Identifica bien las variables y su alcance.</li>
                <li>Elige algoritmos y estructuras de datos convenientes para el problema.</li>
                <li>Mantén la lógica de la aplicación lo más sencilla posible.</li>
                <li>Documenta y comenta apropiadamente el código de los programas.</li>
                <li>Facilita la interpretación visual del código manejando reglas de formato de código anteriormente acordadas en el equipo de desarrollo.</li>
                <li>Ten en cuenta la adquisición de recursos obligatorios para que el software funcione, y desarrolla casos de prueba para probar el funcionamiento del mismo de acuerdo a como se vaya programando.</li>
            </ul>
        </li>
        <div style="text-align: center;"><img src="images/img-cib.webp" alt="" width="300" height="199" ></div>
        <li>Prueba: busca detectar errores cometidos en las etapas previas para corregirlos, es ideal hacerlo antes de que el usuario final los consiga, la prueba será un éxito si se detecta algún error.</li>
        <li>Despliegue: en esta fase se pone el software en funcionamiento, por ello se debe planificar el entorno considerando las dependencias existentes entre los distintos componentes del mismo. Puede haber componentes que funcionen individualmente, pero al combinarlos tengan problemas, siempre usa combinaciones conocidas que no tengan problemas de compatibilidad.</li>
        <li>Uso y mantenimiento: la fase más importante del ciclo de vida del desarrollo de un software, pues si este no se rompe ni desgasta con el uso, entonces el mantenimiento incluye 3 puntos distintos:
            <ul>
                <li>Eliminar defectos descubiertos durante su vida útil (mantenimiento correctivo).</li>
                <li>Adaptarlo a nuevas necesidades (mantenimiento adaptativo).</li>
                <li>Agregarle nuevas funcionalidades (mantenimiento perfectivo).</li>
            </ul>
        </li>
    </ul>
    <p>Mientras mejor sea el software mayor tiempo se debe invertir en su funcionamiento, debido a que se usará más, incluso más de lo previsto, y esto dará pie a más propuestas de mejoras.
    </p>
    </div>
  
    <div style="padding: 0%; width: 100%;">
      <!-- Inicio pie de pagina -->
     <footer class="footer mt-auto text-light text-center py-3" style="background-color: #0F3057;  width: 100%; margin: 0; padding: 0px;">
      <p>&copy; Synergy, todos los derechos reservados</p>
      </footer>
    </div>
</div>

  

   <!-- Fin pie de pagina -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  

  
  <!-- Agrega los scripts de Bootstrap para su funcionamiento -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
