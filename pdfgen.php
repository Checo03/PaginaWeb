<?php
require('fpdf/fpdf.php');
$nombre ="jose";
$apellidoP="perez";
$apellidoM ="hernandez";
$edad = $_POST["edad"];
$telefono = $_POST["telefono"];
$imagen = $_FILES["imagen"]["name"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$lenguajes =$_POST["lenguajes"];
$viajar = $_POST["viajar"];
$ingles = $_POST["ingles"];
$puesto = $_POST["puesto"];

$pdf = new FPDF();
$pdf->AddPage();

// Agregar margen más grueso
$pdf->SetMargins(20, 20, 20);

// Insertar logotipo
$pdf->Image('logoE.jpg', 10, 10, 30);

// Agregar nombre de la empresa y eslogan
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Nombre de la Empresa', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, 'Eslogan de la Empresa', 0, 1, 'C');

// Agregar fecha
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Fecha de creacion: ' . date('d/m/Y'), 0, 1, 'R');

// Agregar texto descriptivo
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 10, 'Texto descriptivo sobre el examen para evaluar si es candidato o no a trabajar en la empresa.', 0, 'J');

// Agregar datos del formulario
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Datos del Formulario', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, "Nombre: $nombre $apellidoP $apellidoM", 0, 1);
$pdf->Cell(0, 10, "Edad: $edad", 0, 1);
$pdf->Cell(0, 10, "Teléfono: $telefono", 0, 1);
$pdf->Cell(0, 10, "Imagen: $imagen", 0, 1);
$pdf->Cell(0, 10, "Fecha de nacimiento: $dia/$mes/$ano", 0, 1);
$pdf->Cell(0, 10, "Lenguajes: " . implode(', ', $lenguajes), 0, 1);
$pdf->Cell(0, 10, "¿Dispuesto a viajar?: $viajar", 0, 1);
$pdf->Cell(0, 10, "Nivel de ingles: $ingles", 0, 1);
$pdf->Cell(0, 10, "Puesto deseado: $puesto", 0, 1);

// Agregar nombre del director y logotipo en el pie de página
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Nombre del Director', 0, 0, 'C');
$pdf->Image('logoE.jpg', 10, $pdf->GetY(), 30);

// Salida del PDF
$pdf->Output('solicitud_empleo.pdf', 'D');s




?>