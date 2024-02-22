<body>
    <?php
    
        require 'Inicio_Form.php';
    
        $usuario = $_POST["login"];
        $con = $_POST["con"];
        
        $file = fopen("Usuarios.txt","a+");
        
        fwrite($file, $usuario." ".$con."\r\n");
        
        fclose($file);
        
        echo '<script type="text/javascript">
                function showR() {
                    if(confirm("Usuario registrado con exito!!")){
                        window.location = "Inicio_Form.php";
                    }
                }
            </script>';
        echo '<script type="text/javascript">
                showR();
            </script>';
        /* echo "<br> Usuario registrado <br>";   
        
        echo "<br><a href='Inicio_Form.php' class='btn btn-primary'>Regresar</a>"; */

    ?>
</body>