<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .contenedor {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            overflow: hidden;
            position: relative;
        }
        .test {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 80%;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }
        .test:hover {
            transform: translateX(20px);
        }
        .test img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .leyenda {
            text-align: center;
            margin-top: 10px;
        }
        .ventana-emergente {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            z-index: 9999;
        }
        .ventana-emergente input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .ventana-emergente button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="test" onclick="mostrarVentana()">
            <img src="gifExamen.gif" alt="GIF">
            <div class="leyenda">Clic en la imagen para comenzar el test</div>
        </div>
    </div>
    
    <div class="ventana-emergente" id="ventana">
        <label for="clave">Clave de acceso:</label>
        <input type="password" id="clave" name="clave">
        <button onclick="enviarClave()">Enviar</button>
    </div>

    <script>
        function mostrarVentana() {
            document.getElementById("ventana").style.display = "block";
        }

        function enviarClave() {
            // Aquí puedes agregar el código para procesar la clave de acceso
            alert("Clave enviada");
            document.getElementById("ventana").style.display = "none";
        }
    </script>
</body>
</html>
