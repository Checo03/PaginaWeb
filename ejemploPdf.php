<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 class="text-center mb-4">Formulario de Datos</h2>
<form action="pdfgen.php" method="post" enctype="multipart/form-data">
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
               <label class="form-check-label" for="lenguajeC">C++</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="java" value="java">
               <label class="form-check-label" for="java">Java</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="cmm" value="cmm">
               <label class="form-check-label" for="css">C++</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="sql" value="sql">
               <label class="form-check-label" for="css">SQL</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" name="lenguajes[]" id="csharp" value="csharp">
               <label class="form-check-label" for="css">C#</label>
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
               <option value="diseñador_ui">Diseñador UI</option>
               <option value="ciberseguridad">Ciberseguridad</option>
               <option value="programador">Programador</option>
               <option value="analista">Analista</option>
               <option value="gerente_proy">Gerente de proyectos</option>
               <option value="data_science">Data Science</option>
               <option value="programador">Otro Puesto</option>
           </select>
       </div>
       <button type="submit" class="btn btn-primary">Enviar</button>
   </form>
</div>
    
</body>
</html>