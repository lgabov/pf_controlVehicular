<?php
require('fpdf.php');

// Formato
$pdf = new FPDF('L', 'mm', [54, 85]);
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->SetTextColor(0);

// BLOQUE 1: DATOS PROPIETARIO

// Fila 1
$pdf->SetFont('Arial', 'B', 4.5);
$pdf->SetXY(4, 4); $pdf->Cell(25, 2, 'NOMBRE:', 0);
$pdf->SetXY(31, 4); $pdf->Cell(25, 2, 'MUNICIPIO:', 0);
$pdf->SetXY(58, 4); $pdf->Cell(25, 2, 'FOLIO:', 0);

$pdf->SetFont('Arial', '', 5);
$pdf->SetXY(4, 6.5); $pdf->MultiCell(25, 2.1, 'JUAN PEREZ HERNANDEZ', 0, 'L');
$pdf->SetXY(31, 6.5); $pdf->Cell(25, 2, 'EL MARQUES, QRO', 0);
$pdf->SetXY(58, 6.5); $pdf->SetFont('Arial','B',5.5); $pdf->Cell(25, 2, '178935050', 0);

// Fila 2
$pdf->SetFont('Arial', 'B', 4.5);
$pdf->SetXY(4, 10.5); $pdf->Cell(25, 2, 'RFC:', 0);
$pdf->SetXY(31, 10.5); $pdf->Cell(25, 2, 'VIGENCIA:', 0);
$pdf->SetXY(58, 10.5); $pdf->Cell(25, 2, 'OFICINA:', 0);

$pdf->SetFont('Arial', '', 5);
$pdf->SetXY(4, 13); $pdf->Cell(25, 2, 'PEHJ800101HDF', 0);
$pdf->SetXY(31, 13); $pdf->Cell(25, 2, 'INDEFINIDA', 0);
$pdf->SetXY(58, 13); $pdf->Cell(25, 2, 'CADEREYTA DE MONTES', 0);



// Fila 1 Vehículo
$pdf->SetFont('Arial', 'B', 4.5);
$pdf->SetXY(4, 19); $pdf->Cell(25, 2, 'MARCA / ANIO:', 0);
$pdf->SetXY(31, 19); $pdf->Cell(25, 2, 'PLACA:', 0);
$pdf->SetXY(58, 19); $pdf->Cell(25, 2, 'NUMERO DE SERIE:', 0);

$pdf->SetFont('Arial', '', 5);
$pdf->SetXY(4, 21.5); $pdf->Cell(25, 2, 'FORD / 1996', 0);
$pdf->SetXY(31, 21.5); $pdf->SetFont('Arial','B',6); $pdf->Cell(25, 2, '2008/SU2943A', 0);
$pdf->SetXY(58, 21.5); $pdf->SetFont('Arial','',5); $pdf->Cell(25, 2, '1FTCR14A6TPA47038', 0);

// Fila 2 Vehículo
$pdf->SetFont('Arial', 'B', 4.5);
$pdf->SetXY(4, 25.5); $pdf->Cell(25, 2, 'ORIGEN / COLOR:', 0);
$pdf->SetXY(31, 25.5); $pdf->Cell(25, 2, 'CILINDRAJE:', 0);
$pdf->SetXY(58, 25.5); $pdf->Cell(25, 2, 'PUERTAS / ASIENTOS:', 0);

$pdf->SetFont('Arial', '', 5);
$pdf->SetXY(4, 28); $pdf->Cell(25, 2, 'EXTRANJERO / VERDE', 0);
$pdf->SetXY(31, 28); $pdf->Cell(25, 2, '4 CIL / 750 KG', 0);
$pdf->SetXY(58, 28); $pdf->Cell(25, 2, '2 PUERTAS / 3 ASIENT.', 0);

// Fila 3 Vehículo
$pdf->SetFont('Arial', 'B', 4.5);
$pdf->SetXY(4, 32); $pdf->Cell(25, 2, 'TRANSMISION:', 0);
$pdf->SetXY(31, 32); $pdf->Cell(25, 2, 'CLAVE VEHICULAR:', 0);
$pdf->SetXY(58, 32); $pdf->Cell(25, 2, 'COMBUSTIBLE:', 0);

$pdf->SetFont('Arial', '', 5);
$pdf->SetXY(4, 34.5); $pdf->Cell(25, 2, 'ESTANDAR', 0);
$pdf->SetXY(31, 34.5); $pdf->Cell(25, 2, '04-MAY-18', 0);
$pdf->SetXY(58, 34.5); $pdf->Cell(25, 2, 'GASOLINA', 0);

// PIE DE PÁGINA 
$pdf->Image('queretaro_nosotros.jpg', 5, 38, 6);
$pdf->Image('escudo.png', 13, 38, 6);

$pdf->SetXY(24.28, 39);
$pdf->SetFont('Arial', 'B', 4.5);
$pdf->MultiCell(36.42, 2, "PODER EJECUTIVO DEL ESTADO DE QUERETARO", 0, 'C');
$pdf->SetX(24.28);
$pdf->SetFont('Arial', '', 3.5);
$pdf->Cell(36.42, 2, "SECRETARIA DE PLANEACION Y FINANZAS", 0, 0, 'C');

$pdf->Image('QRcode.png', 62.21, 38, 10);

$pdf->SetXY(0, 49);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(85, 4, 'TARJETA DE CIRCULACION VEHICULAR', 0, 0, 'C');

$pdf->Output('I');
?>