
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio de Sesión y Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estiloForm.css">
      
</head>
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

    <div class="containerForm">
        <!-- Inicio de Sesión -->
        <form id="loginForm" action="ingresarV.php" method="post">
            <h2 class="mb-4">Inicio de Sesión</h2>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidoP">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoP" name="apellidoP" required>
            </div>
            <div class="form-group">
                <label for="apellidoM">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoM" name="apellidoM" required>
            </div>
            <div class="form-group">
                <label for="passwd">Contraseña</label>
                <input type="password" class="form-control" id="passwd" name="passwd" required>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <p class="mt-3">¿No tienes cuenta? <a href="#" id="showRegisterForm">Crea una ya</a></p>
        </form>

        <!-- Registro (oculto de principio) -->
        <form id="registerForm" action="verifRegistro.php" method="post" style="display:none;">
            <h2 class="mb-4">Registro</h2>
            <div class="form-group">
                <label for="nombreR">Nombre</label>
                <input type="text" class="form-control" id="nombreR" name="nombreR" required>
            </div>
            <div class="form-group">
                <label for="apellidoPR">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoPR" name="apellidoPR" required>
            </div>
            <div class="form-group">
                <label for="apellidoMR">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoMR" name="apellidoMR" required>
            </div>
            <div class="form-group">
                <label for="passwdR">Contraseña</label>
                <input type="password" class="form-control" id="passwdR" name="passwdR" required>
            </div>
            <button type="submit" class="btn btn-success">Registrarse</button>
            <p class="mt-3">¿Ya tienes una cuenta? <a href="#" id="showLoginForm">Inicia sesion</a></p>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Mostrar el formulario de registro cuando se hace clic en el enlace
            $("#showRegisterForm").click(function() {
                $("#loginForm").hide();
                $("#registerForm").show();
                return false;
            });

            // Volver al formulario de inicio de sesión cuando se hace clic en el enlace
            $("#showLoginForm").click(function() {
                $("#registerForm").hide();
                $("#loginForm").show();
                return false;
            });
        });
    </script>

