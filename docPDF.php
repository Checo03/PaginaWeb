<?php
require('fpdf/fpdf.php');
$nombre =$_POST["nombre"];
$apellidoP=$_POST["apellido_paterno"];
$apellidoM =$_POST["apellido_materno"];
$edad = $_POST["edad"];
$telefono = $_POST["telefono"];

/*$imagen = $_FILES["imagen"]["name"];
$nombreTemporal = $_FILES["imagen"]["tmp_name"];
$direcDestino = "perfiles/";
$rutaDestino=$direcDestino.$imagen;
if(move_uploaded_file($nombreTemporal, $rutaDestino)) {
    echo"cargado con exito";
}
else {
    echo"error";

}*/

$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$lenguajes =$_POST["lenguajes"];
$viajar = $_POST["viajar"];
$ingles = $_POST["ingles"];
$puesto = $_POST["puesto"];
$claveE=$_POST["claveE"];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetMargins(10, 10, 10);

// Logotipo
$pdf->Image('logoE.jpg', 10, 10, 30);

// Nombre de la empresa y eslogan
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Synergy', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, 'Herramientas para la revolucion digital', 0, 1, 'C');

// Fecha
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Fecha: ' . date('d/m/Y'), 0, 1, 'R');

$pdf->Ln(10);

$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 10, 'Tus datos han sido enviados a la base de datos del sistema y estan listos para ser procesados, he aqui un resumen de los mismos.', 0, 'J');

// Datos del solicitante
$pdf->Ln(10); //Genera espacio

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Datos del solicitante', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
//$pdf->Image($rutaDestino, 10, $pdf->GetY() + 5, 30);
$pdf->Cell(0, 10, "Nombre: $nombre $apellidoP $apellidoM", 0, 1);
$pdf->Cell(0, 10, "Edad: $edad", 0, 1);
$pdf->Cell(0, 10, "Telefono: $telefono", 0, 1);
$pdf->Cell(0, 10, "Fecha de nacimiento: $dia/$mes/$ano", 0, 1);
$pdf->Cell(0, 10, "Lenguajes dominantes: $lenguajes", 0, 1);
$pdf->Cell(0, 10, "Disponibilidad de viaje: $viajar", 0, 1);
$pdf->Cell(0, 10, "Domina ingles: $ingles", 0, 1);
$pdf->Cell(0, 10, "Puesto deseado: $puesto", 0, 1);
$pdf->Cell(0, 10, "Tu clave de acceso al examen es: $claveE", 0, 1);

$pdf->Ln(10);

$pdf->MultiCell(0, 10, 'En Synergy agradecemos el interes que presentas para formar parte de este equipo. Te recordamos que esto es un resumen de tu presentacion, y aun tienes que realizar el examen para evaluar tu candidatura. Recuerda que para ello tienes que ingresar tu clave de acceso que se te proporciono. No olvides que solo tienes un intento ¡Mucha suerte y esperamos verte pronto por aca!', 0, 'J');

// Nombre del director y firma
$pdf->SetY(-50);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Cristiano Lionel Santos Cuccittini', 0, 0, 'C');
$pdf->Image('Media/MediaExamen/firmaD.png', 10, $pdf->GetY() + 5, 30);

$pdf->Output('solicitud_empleo.pdf', 'D');




?>