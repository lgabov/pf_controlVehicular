<?php

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
*/

//*-------------------------------
    include("../Controlador.php");
    $MultaId = $_GET['MultaId'];
    $Con = Conectar();
    //$Numero_licencia=$_GET['Numero_licencia'];
    $sql = "SELECT * FROM vista_multas WHERE Folio = $MultaId";
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
//-------------------------------------

require('fpdf.php');
$pdf = new FPDF('L', 'mm', [105,135]);

$pdf->AddPage();
$pdf->SetAutoPageBreak(false);

$pdf->SetFont('Arial','B',10);
$pdf->SetXY(5, 2);
$pdf->MultiCell(70,5,'COMPROBANTE DIGITAL DE PAGO');

//TABLA
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(5, 20);
$pdf->MultiCell(30,4,'CONDUCTOR', 1, 'L');
$pdf->SetXY(5, 24);
$pdf->MultiCell(30,4,'RFC', 1, 'L');
$pdf->SetXY(5, 28);
$pdf->MultiCell(30,4,'DOMICILIO', 1, 'L');


$pdf->SetFont('Arial','',8);
$pdf->SetXY(35, 20);
$pdf->MultiCell(80,4, "$Fila[1]", 1, 'L');
$pdf->SetXY(35, 24);
$pdf->MultiCell(80,4,"$Fila[2]", 1, 'L');
$pdf->SetXY(35, 28);
$pdf->MultiCell(80,4,"$Fila[0]", 1, 'L');

//INFO MULTA
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(5, 40);
$pdf->MultiCell(40,4,'FECHA', 1, 'L');
$pdf->SetXY(5, 44);
$pdf->MultiCell(40,4,'FECHA LIMITE DE PAGO', 1, 'L');
$pdf->SetXY(5, 48);
$pdf->MultiCell(40,4,'IMPORTE/MONTO', 1, 'L');
$pdf->SetXY(5, 52);
$pdf->MultiCell(40,4,'CAUSA/MOTIVO', 1, 'L');

$pdf->SetFont('Arial','',8);
$pdf->SetXY(45, 40);
$pdf->MultiCell(30,4,"$Fila[3]", 1, 'C');
$pdf->SetXY(45, 44);
$pdf->MultiCell(30,4,"$Fila[6]", 1, 'C');
$pdf->SetXY(45, 48);
$pdf->SetTextColor(180,0,0);
$pdf->SetFont('Arial','B',8);
$pdf->MultiCell(70,4,"$Fila[7]", 1, 'R');
$pdf->SetXY(45, 52);
$pdf->SetTextColor(0);
$pdf->SetFont('Arial','',8);
$pdf->MultiCell(70,4,"$Fila[5]", 1, 'L');

$pdf->SetFont('Arial','',8);
$pdf->SetXY(5, 65);
$pdf->MultiCell(30,4,'Pagar en:');
$pdf->SetXY(25, 65);
$pdf->MultiCell(30,4,"$Fila[4]");

//Imagenes
$pdf->Image('../public/Imagenes_archivos/banorte.png', 21.3, 70, 35, 15);

$pdf->Image('../public/Imagenes_archivos/escudo.png', 90, 1, 10, 12);



$pdf->SetFont('Arial','',10);
$pdf->SetXY(57, 70);
$pdf->MultiCell(60,6,'08422 solo ventanilla vancaria');
$pdf->SetXY(57, 78);
$pdf->MultiCell(60,6,'Cuenta');

//Respaldo de archivo XML
$archivo = __DIR__ . '/respaldos_multas/info_multa101.xml';
$Manejador = fopen($archivo, "w+");

fputs($Manejador, "<multa>");
fputs($Manejador, "<domicilio>$Fila[0]</domicilio>\n");
fputs($Manejador, "<conductor>$Fila[1]</conductor>\n");
fputs($Manejador, "<RFC>$Fila[2]</RFC>\n");
fputs($Manejador, "<fecha>$Fila[3]</fecha>\n");
fputs($Manejador, "<folio>$Fila[4]</folio>\n");
fputs($Manejador, "<fecha_limite>$Fila[5]</fecha_limite>\n");
fputs($Manejador, "<importe>$Fila[6]</importe>\n");
fputs($Manejador, "<fundamentos>$Fila[7]</fundamentos>\n");

fputs($Manejador, "</multa>");
fflush($Manejador); 
fclose($Manejador);

$pdf->Output('I');



?>