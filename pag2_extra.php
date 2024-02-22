<?php
session_start(); // Iniciar la sesión al principio del archivo PHP

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1d06ada3de.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/extra.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo_final.jpeg" />
    <title>Contacto</title>
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
    

    <br><br>
    <h1>CONTÁCTANOS</h1>
    <div class="contenedor" style="text-align: center;">
        <section>
            <!-- Contenido izquierdo -->
            <div style="text-align: center; padding: 20px;">
                <h3 style="font-size: 24px; font-weight: bold; color: red;">¡Dato interesante!</h3>
                <p>El término "bug" o "error" se popularizó en la ingeniería de software gracias a Grace Hopper, una pionera en programación y almirante de la Marina de los Estados Unidos. En 1947, mientras trabajaba en la computadora Mark II en Harvard, encontraron un error en el sistema. Al inspeccionar la máquina, descubrieron un error causado por una polilla que quedó atrapada en un relé, y así nació el término "bug" en la ingeniería de software. A partir de ese momento, el concepto de "debugging" (depuración) se utiliza comúnmente para describir la identificación y corrección de errores en el software.</p>
            </div>
        </section>

            
                <form action="">
                    <fieldset >
                        <table>
                            <tr>
                                <td style="text-align: center; font-size: large; " colspan="2">Crear Cuenta</td>
                            </tr>
                            <tr>
                                <td colspan="2"><br> <label for="email">Ingresa tu correo electronico</label>
                                    <input  type="email" id="email"></td>
                            </tr>
                            <tr>
                                <td><label for="Contraseña">Contraseña:  </label></td>
                                <td colspan="2"><input  type="text" id="Nombre"></td>
                            </tr>
                            <tr>
                                <td><label for="contra2">Verificar contraseña:</label></td>
                                <td colspan="2"><input  type="text" id="Nombre"></td>
                            </tr>
                            <tr>
                            <td ><label for="edad">Edad:</label></td>
                            <td ><input id="edad" type="number" min="15" max="80" ></td>
                            </tr>
                            <tr>
                                <td><label for="Nombre">Nombre/s:</label></td>
                                <td colspan="2"><input  type="text" id="Nombre"></td>
                            </tr>
                            <tr>
                                <td><label for="Apellidos">Apellido/s:</label></td>
                                <td colspan="2"><input  type="text" id="Apellidos"></td>
                            </tr>
                            
                        </table>
            
                        <div style="text-align: center;"><button id="nueva_cuenta">Crear cuenta</button></div>
                    </fieldset>
                </form>
        

        <section>
            <!-- Contenido derecho -->
            <div style="text-align: center;" >
                    <h3 style="font-size: 24px; font-weight: bold; padding: 20px; color: red;">Herramientas para el desarrollo de software</h3>
                    <div class="image">
                        <img src="images/herramientas.jpeg" alt="">
                    <div class="name">
                        <h4 style="color: white;">Entornos Integrados de Desarrollo (IDEs):</h4>
                <p style="color: white;">Visual Studio Code: Un editor de código liviano y altamente personalizable.
                    <br>IntelliJ IDEA: IDE popular para el desarrollo en Java.
                    <br>Eclipse: Utilizado principalmente para aplicaciones Java.
                    <br>Xcode: Específico para el desarrollo de aplicaciones iOS.</p>
                    </div>
                    </div>
                    
                
                
            </div>
        </section>
    </div>
   

    <h3>Tambien nos puedes encontrar en:</h3>
    <p>Universidad Autónoma de Aguascalientes, Avenida Universidad 940, Ciudad Universitaria, Universidad Autónoma de Aguascalientes, 20100 Aguascalientes, Ags.</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118449.9567589371!2d-102.39711033923508!3d21.9129687841151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ef1da1ab338d%3A0x89a0246637c42ddb!2sUniversidad%20Aut%C3%B3noma%20de%20Aguascalientes!5e0!3m2!1ses-419!2smx!4v1698528311282!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    
    <ul style="padding: 60px;">
        <h3 style="text-align: center;">Acerca de nuestra empresa</h3>
        <li>Experiencia del Usuario (UX) Destacada: Diseñamos nuestros productos con un enfoque centrado en el usuario, asegurándonos de que cada solución que creamos sea intuitiva y satisfactoria para nuestros clientes.</li>
        <li>Desarrollo Ágil y Eficiente: Adoptamos metodologías ágiles para una entrega rápida y flexible, permitiéndonos adaptarnos a medida que avanzamos en el proceso de desarrollo.</li>
        <li>Rigurosas Pruebas de Calidad: Implementamos pruebas exhaustivas para garantizar que nuestros productos estén libres de errores, utilizando pruebas de unidad, integración y pruebas de aceptación.</li>
        <li>Desarrollo Continuo e Integración Continua (CI/CD): Automatizamos nuestro proceso de desarrollo y despliegue para ofrecer actualizaciones constantes y una entrega continua de nuevas funcionalidades.</li>
        <li>Compromiso con la Seguridad: Priorizamos la seguridad en todas las etapas del desarrollo para proteger los datos y prevenir posibles vulnerabilidades.</li>
        <li>Mantenimiento y Actualizaciones Periódicas: Ofrecemos soporte constante para nuestros productos, proporcionando actualizaciones regulares y mantenimiento para mejorar el rendimiento y la seguridad.</li>
        <li>Fomentamos la Colaboración y la Comunicación Efectiva: Creamos un entorno de trabajo colaborativo para una mejor comprensión de los requisitos y objetivos, facilitando una comunicación efectiva entre los equipos.</li>
        <li>Adoptamos Tecnologías Emergentes: Estamos al tanto de las últimas tendencias y evaluamos constantemente nuevas herramientas y tecnologías que pueden mejorar nuestros procesos de desarrollo.</li>
        <li>Inversión en el Desarrollo del Equipo: Nos comprometemos con la capacitación y crecimiento profesional de nuestros empleados, asegurándonos de que estén actualizados con las últimas prácticas y tecnologías.</li>
        <li>Mejora Continua Basada en la Retroalimentación del Usuario: Recopilamos y utilizamos la retroalimentación de los usuarios para mejorar constantemente nuestros productos y servicios, identificando áreas de mejora para evolucionar constantemente.</li>
    </ul>

    <div style="text-align: center; padding: 30px">
        <h3>Autores</h3>
        <section >
            <div >
                <article>
                    <h4>Ricardo Daniel Alvarez Martinez</h4>
                    <img src="images/ricardo.jpeg" alt="" width="235" height="350">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/ricardodaniel.alvarez.378" target="_blank"><img src="images/facebook.png" alt="Facebook" width="30" height="30"></a>
                        <a href="https://www.instagram.com/r_daniel_alvarez/" target="_blank"><img src="images/instagram.jpeg" alt="Instagram" width="30" height="30"></a>
                    </div>
                </article>

                <article>
                    <h4>Diego Ponce Alvarez</h4>
                    <img src="images/ponce.jpeg" alt="" width="235" height="320">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=100028123250816" target="_blank"><img src="images/facebook.png" alt="Facebook" width="30" height="30"></a>
                        <a href="https://www.instagram.com/diego.ponce28/" target="_blank"><img src="images/instagram.jpeg" alt="Instagram" width="30" height="30"></a>
                    </div>
                </article>

                
            </div>

            <div>
                <article>
                    <h4>Emilio Alejandro Garcia Del Alto</h4>
                    <img src="images/emilio.jpeg" alt="" width="260" height="350">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=100025627744345" target="_blank"><img src="images/facebook.png" alt="Facebook" width="30" height="30"></a>
                        <a href="https://www.instagram.com/garcia_emilio03/" target="_blank"><img src="images/instagram.jpeg" alt="Instagram" width="30" height="30"></a>
                    </div>
                </article>

                <article>
                    <h4>Sergio Armando Valdivia Padilla</h4>
                    <img src="images/checo.jpeg" alt="" width="200" height="320">
                    <div class="social-icons">
                        <a href="https://www.instagram.com/sergio_valdivia01/" target="_blank"><img src="images/instagram.jpeg" alt="Instagram" width="30" height="30"></a>
                    </div>
                </article>
            </div>
        </section>
    </div>

     <!-- Inicio pie de pagina -->
     <footer class="footer mt-auto text-light text-center py-3" style="background-color: #0F3057;  width: 100%; margin: 0; padding: 0px;">
        <p>&copy; Synergy, todos los derechos reservados</p>
    </footer>
    <!-- Fin pie de pagina -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    


</body>