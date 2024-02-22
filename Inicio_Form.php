<?php
    session_start();
    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1d06ada3de.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/PInicio.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo_final.jpeg" />
    <title>Inicio</title>
</head>
<body>
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

    <section id="carrusel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/car1.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h4 style="font-size: 34px; font-style: italic;">Herramientas para la evolucion digital</h4>
                </div>
                </div>
                <div class="carousel-item">
                <img src="images/car2.jpg" class="d-block w-100" >
                <div class="carousel-caption d-none d-md-block">
                    <h4 style="font-size: 34px; font-style: italic;">Innovación en Código</h4>
                    <p style="font-size: 28px; font-style: italic;">Creando Soluciones Digitales de Vanguardia</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="images/car3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4 style="font-size: 34px; font-style: italic;">Desarrollo de Software a Medida para Tu Negocio</h4>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>
    
    <section id="introduccion">
        <div class="row" style="margin-top: 60px;">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h2 style="font-style: italic; margin-bottom: 20px; color: #0F3057">Synergy</h2>
                <p style="font-size: 20px">
                    Synergy es una empresa líder en desarrollo de software con más de una década de experiencia en la creación de soluciones digitales innovadoras. Nos enorgullecemos de ser la elección 
                    de confianza para empresas de todos los tamaños que buscan transformar sus ideas en software de alto rendimiento. <br>
                    Lo que nos diferencia es nuestro enfoque en la colaboración y la comprensión profunda de las necesidades de nuestros clientes. Creemos que el desarrollo de software exitoso no solo se 
                    trata de códigos y algoritmos, sino de comprender la visión y los objetivos de nuestros clientes. Es por eso que trabajamos en estrecha colaboración con cada cliente para garantizar que sus expectativas se superen en cada proyecto.
                </p>
            </div>
            <div class="col-md-6" style="padding-top: 50px" >
                    <img src="images/Imagen3.png"  alt="Logo" height="450px" width="520px">
            </div>
        </div>
    </section>

    <section id="valores">
        <div class="container">
            <h2>Nuestra Filosofia</h2>
            <hr>
            <!-- Media Object -->
            <!-- <ul class="list-unstyled" style="margin-top: 80px;">
                <li class="media">
                    <img src="images/mision2.jpg" class="mr-3" alt="..." height="240px" width="220px">
                    <div class="media-body">
                    <h4 class="mt-0 mb-1" style="color: #0F3057">MISIÓN</h4>
                    <p style="font-size: 20px"> Nuestra misión es proporcionar soluciones de software excepcionales 
                        que impulsen la innovación, la eficiencia y el crecimiento de nuestros clientes. Nos comprometemos a superar las expectativas y a entregar resultados de alta calidad.</p>
                    </div>
                </li>
                <li class="media my-4">
                    <img src="images/vision2.jpg" class="mr-3" alt="..." height="240px" width="220px">
                    <div class="media-body">
                    <h4 class="mt-0 mb-1" style="color: #0F3057">VISIÓN</h4>
                    <p style="font-size: 20px">Nuestra visión es ser líderes en la creación de soluciones digitales de vanguardia que transformen industrias y mejoren la vida de las personas en todo el mundo. Buscamos ser un referente en la innovación tecnológica y el servicio al cliente.</p>
                    </div>
                </li>
                <li class="media">
                    <img src="images/valores2.jpg" class="mr-3" alt="..." height="240px" width="220px">
                    <div class="media-body">
                    <h4 class="mt-0 mb-1" style="color: #0F3057">VALORES</h4>
                    <p style="font-size: 20px">
                        • Servicio<br>
                        • Compromiso<br>
                        • Calidad<br>
                    </p>
                    </div>
                </li>
            </ul> -->
            <div class="row" style="margin-top: 80px;">
                <div class="col-md-3">
                    <img src="images/mision2.jpg" height="240px" width="220px">
                </div>
                <div class="col-md-9">
                    <h4 style="color: #0F3057">MISIÓN</h4>
                    <p style="font-size: 20px">
                        Nuestra misión es proporcionar soluciones de software excepcionales 
                        que impulsen la innovación, la eficiencia y el crecimiento de nuestros clientes. Nos comprometemos a superar las expectativas y a entregar resultados de alta calidad.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="images/vision2.jpg" height="240px" width="220px">
                </div>
                <div class="col-md-9">
                    <h4 style="color: #0F3057">VISIÓN</h4>
                    <p style="font-size: 20px">
                        Nuestra visión es ser líderes en la creación de soluciones digitales de vanguardia que transformen industrias y mejoren la vida de las personas en todo el mundo. Buscamos ser un referente en la innovación tecnológica y el servicio al cliente.
                    </p>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-3">
                    <img src="images/valores2.jpg" height="240px" width="220px">
                </div>
                <div class="col-md-9">
                    <h4 style="color: #0F3057">VALORES</h4>
                    <p style="font-size: 20px">
                        • Servicio<br>
                        • Compromiso<br>
                        • Calidad<br>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <hr>
            <div class="container3" style="margin-top: 50px;">
                <img src="images/servicio1.jpg" alt="" class="image3">
                <div class="overlay3">
                <div class="text3">
                    <b>Desarrollo de Software a Medida:</b><br>
                    Creamos soluciones de software personalizadas que se adaptan a las necesidades únicas de tu empresa.</div>
                </div>
            </div>
            <div class="container3">
                <img src="images/servicio2.jpg" alt="" class="image3">
                <div class="overlay3">
                <div class="text3">
                    <b>Desarrollo de Aplicaciones Móviles:</b><br>
                    Diseñamos aplicaciones móviles innovadoras para iOS y Android que catapultan tu presencia en dispositivos móviles. 
                </div>
                </div>
            </div>
            <div class="container3">
                <img src="images/servicio3.jpg" alt="" class="image3">
                <div class="overlay3">
                <div class="text3">
                    <b>Desarrollo Web:</b><br>
                    Construimos sitios web atractivos y funcionales que impulsan la presencia en línea de tu negocio.
                </div>
                </div>
            </div>
            <div class="container3" style="margin-top: 30px;">
                <img src="images/servicio4.jpg" alt="" class="image3">
                <div class="overlay3">
                <div class="text3">
                    <b>Consultoría Tecnológica:</b><br>
                    Ofrecemos asesoramiento experto en tecnología para ayudarte a tomar decisiones informadas.
                </div>
                </div>
            </div>
            <div class="container3">
                <img src="images/servicio5.jpg" alt="" class="image3">
                <div class="overlay3">
                <div class="text3">
                    <b>Soluciones en la Nube:</b><br>
                    Implementamos sistemas basados en la nube, con toda la seguridad para el crecimiento continuo de tu negocio.
                </div>
                </div>
            </div>           
        </div> 
    </section>
    <section id="comentarios">
        <h2>Testimonios</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white mb-3" style="max-width: 18rem; opacity: .8; background-color: #0F3057;">
                        <div class="card-header">Testimonio 1</div>
                        <div class="card-body">
                            <h4 class="card-title" style="font-style: italic;">-- Juan Esparza --</h4>
                            <p class="card-text" style="font-style: italic;">"Synergy ha sido un socio valioso en nuestro viaje tecnológico. Su compromiso con la calidad y la entrega puntual es impresionante. Seran nuestros socios en proyectos futuros"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white mb-3" style="max-width: 18rem; opacity: .8; background-color: #0F3057;">
                        <div class="card-header">Testimonio 2</div>
                        <div class="card-body">
                            <h4 class="card-title" style="font-style: italic;">-- Ana Rodríguez --</h4>
                            <p class="card-text" style="font-style: italic;">"Mostraron un profundo compromiso con comprender nuestras necesidades y objetivos comerciales. El resultado final fue una aplicación que superó nuestras expectativas."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white mb-3" style="max-width: 18rem; opacity: .8; background-color: #0F3057;">
                        <div class="card-header">Testimonio 3</div>
                        <div class="card-body">
                            <h4 class="card-title" style="font-style: italic;">--  Carlos Gómez --</h4>
                            <p class="card-text" style="font-style: italic;">"Su equipo demuestra un alto nivel de experiencia y compromiso. Estamos encantados de haberlos elegido para este proyecto y estamos ansiosos por futuras colaboraciones"</p>
                        </div>
                    </div>
                </div>>
            </div>
        </div>
    </section>

    <section id="elegirnos">
        <div class="container">
            <h2>Proyectos Realizados</h2>
            <hr>
            <div class="row row-cols-1 row-cols-md-2" style="margin-top: 60px;">
                <div class="col mb-4">
                    <div class="card">
                    <img src="images/RH.png" class="card-img-top" height="240px" width="220px">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0F3057">Sistema de Gestión de Recursos Humanos (HRMS)</h5>
                        <p class="card-text">Desarrollamos un sistema integral de gestión de recursos humanos para una empresa multinacional. El proyecto incluyó módulos de seguimiento de empleados, nómina, evaluaciones de desempeño, reclutamiento y capacitación.</p>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                    <img src="images/comercio.jpg" class="card-img-top" height="240px" width="220px">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0F3057">Plataforma de Comercio Electrónico Personalizada</h5>
                        <p class="card-text">Trabajamos en colaboración con una empresa minorista para desarrollar una plataforma de comercio electrónico personalizada.
                        El sistema incluyó características como carritos de compra, gestión de inventario en tiempo real y opciones de pago seguras.    
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                    <img src="images/sistemas.jpg" class="card-img-top" height="240px" width="180px">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0F3057">Project Management Tool</h5>
                        <p class="card-text">Desarrollo de una herramienta de gestión de proyectos en línea que permite a equipos y organizaciones planificar, asignar tareas, hacer un seguimiento del progreso y colaborar de manera eficiente. Incluye funcionalidades como diagramas de Gantt, calendarios compartidos, etc.</p>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                    <img src="images/fit.jpg" class="card-img-top" height="240px" width="220px">
                    <div class="card-body" style="color: #0F3057">
                        <h5 class="card-title">Aplicación Móvil de Rastreo de Salud y Fitness</h5>
                        <p class="card-text">Desarrollamos una aplicación móvil de rastreo de salud y fitness para un cliente en el sector de la salud. La aplicación permitió a los usuarios realizar un seguimiento de sus actividades físicas, registrar su ritmo cardiaco y seguimiento de calorias</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Inicio pie de pagina -->
    <footer class="footer mt-auto text-light text-center py-3" style="background-color: #0F3057;">
        <p>&copy; Synergy, todos los derechos reservados</p>
    </footer>
    <!-- Fin pie de pagina -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>