<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

//*------------------------------------------------
include("../Controlador.php");
$Con = Conectar();
$sql = "SELECT * FROM vista_conductores WHERE Numero_licencia = 100;";
$ResultSet = Ejecutar($Con, $sql);
$Fila = mysqli_fetch_assoc($ResultSet);

Desconectar($Con);
//*------------------------------------------------


require('../fpdf.php');

$pdf = new FPDF('P', 'mm', [54, 85]);

$pdf->AddPage();

$pdf->SetAutoPageBreak(false);

//Encabezado
$pdf->SetFont('Arial','',3);

//$pdf->Image('../Public/escudo.png', 5, 6, 7, 7);

$pdf->SetXY(14, 5);
$pdf->MultiCell(30,2,'Estados Unidos Mexicanos',0,'L');

$pdf->SetXY(14, 7);
$pdf->MultiCell(30,2,'Poder Ejecutivo Del Estado De Queretaro',0,'L');

$pdf->SetXY(14, 10);
$pdf->SetFont('Arial','B',4);
$pdf->MultiCell(30,2,'Secretaria de Seguridad Ciudadana',0,'L');

$pdf->SetXY(14, 12);
$pdf->MultiCell(30,3,'Licencia para conducir',0,'L');

//Foto
//$pdf->Image($Fila['foto'], 30, 18, 20, 22);

$pdf->SetXY(15, 29);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'No. de Licencia',0,'R');

$pdf->SetXY(10, 30);
$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(20,4,$Fila['Numero_licencia'],0,'R');

$pdf->SetXY(5, 34);
$pdf->SetFont('Arial','',6);
$pdf->MultiCell(25,3,'AUTOMOVILISTA',0,'R');

//Nombre
$pdf->SetXY(42, 40);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(8,1,'Nombre',0,'R');

$pdf->SetXY(25, 41);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(25,4,$Fila['Apellido_paterno'],0,'R');

$pdf->SetXY(25, 45);
$pdf->MultiCell(25,4,$Fila['Apellido_materno'],0,'R');

$pdf->SetXY(15, 50);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(35,4,$Fila['Nombre'],0,'R');

$pdf->SetXY(40, 54);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(10,1,'Observaciones',0,'R');

//Datos
$pdf->SetXY(4, 55);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'Fecha de Nacimiento',0,'L');

$pdf->SetXY(4, 56);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(15,3,$Fila['Fecha_nacimiento'],0,'L');

$pdf->SetXY(4, 59);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'Fecha de Expedicion',0,'L');

$pdf->SetXY(4, 60);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(15,3,$Fila['Fecha_expedicion'],0,'L');

$pdf->SetXY(4, 63);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'Valida hasta',0,'L');

$pdf->SetXY(4, 64);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(15,3,$Fila['Fecha_validez'],0,'L');

//Firma
$pdf->SetXY(28, 67);
$pdf->Cell(15,1,'Firma',0,0,'L');

$pdf->Image($Fila['firma'], 23, 69, 15, 5);

//Antiguedad
$pdf->SetXY(4, 67);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'Antiguedad',0,'L');

$pdf->SetXY(4, 68);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(15,3,$Fila['Antiguedad'],0,'L');

$pdf->SetXY(8, 77);
$pdf->SetFont('Arial','',3.5);

$pdf->MultiCell(
    40,
    3,
    'AUTORIZA PARA QUE LA PRESENTE SEA RECABADA COMO GARANTIA DE INFRACCION',
    0,
    'C'
);

//REVERSO
$pdf->AddPage();

$pdf->SetAutoPageBreak(false);

//911
$pdf->SetFont('Arial', 'B', 7);

$pdf->SetXY(2, 4);
$pdf->Cell(12, 3, '911', 0, 0, 'C');

$pdf->SetXY(2, 7);
$pdf->SetFont('Arial', '', 3.5);
$pdf->Cell(12, 2, 'EMERGENCIAS', 0, 0, 'C');

//DOMICILIO
$pdf->SetFont('Arial', 'B', 5);

$pdf->SetXY(30, 12);
$pdf->Cell(22, 3, 'Domicilio', 0, 0, 'R');

$pdf->SetFont('Arial', '', 5.5);

$pdf->SetXY(25, 15);

$domicilio = 
    $Fila['Localidad'] . ", " .
    $Fila['Municipio'] . ", " .
    $Fila['Entidad_federativa'];

$pdf->MultiCell(27, 2.5, $domicilio, 0, 'R');

//DATOS MÉDICOS
$pdf->SetXY(25, 33);

$pdf->SetFont('Arial', 'B', 4);
$pdf->MultiCell(25, 1, 'Grupo Sanguineo', 0, 'R');

$pdf->SetFont('Arial', 'B', 6);

$pdf->SetXY(25, 34);
$pdf->MultiCell(25, 3, $Fila['Grupo_sanguineo'], 0, 'R');

$pdf->SetFont('Arial', 'B', 4);

$pdf->SetXY(25, 37);
$pdf->MultiCell(25, 1, 'Donador de Organos', 0, 'R');

$pdf->SetFont('Arial', 'B', 6);

$pdf->SetXY(25, 38);
$pdf->MultiCell(25, 3, $Fila['Donador_organos'], 0, 'R');

//FIRMAS
$pdf->SetXY(5, 55);

$pdf->SetFont('Arial', 'B', 4);

$pdf->Cell(
    47,
    2,
    'MTRO. EN GPA. MIGUEL ANGEL CONTRERAS ALVAREZ',
    0,
    1,
    'L'
);

$pdf->Cell( 47, 2,'SECRETARIO DE SEGURIDAD CIUDADANA',0,1,'L');

//FUNDAMENTO LEGAL
$pdf->SetXY(3, 62);

$pdf->SetFont('Arial', 'B', 4);

$pdf->Cell(20, 2, 'Fundamento Legal', 0, 1);

$pdf->SetFont('Arial', '', 3.2);

$pdf->SetXY(3, 65);

$pdf->MultiCell(
    48,
    1.8,
    'Articulo 19 fraccion XIV y 33 fraccion I de la Ley Organica del Poder Ejecutivo del Estado de Queretaro, articulo 9 fraccion XIV y 55 de la Ley de Transito del Estado de Queretaro, articulo 4 de la Ley de Procedimientos Administrativos del Estado de Queretaro, articulo 134, 135, 136, 137, 138, 139, 140, 141, 142 y 143 del Reglamento de Transito del Estado de Queretaro, articulo 6, fraccion IV, inciso b) y 20 fraccion IV de la Ley de la Secretaria de Seguridad Ciudadana.',
    0,
    'L'
);

$pdf->SetXY(15, 76);

$pdf->SetFont('Arial', 'B', 5);

$pdf->MultiCell(30,2.5,'SECRETARIA DE SEGURIDAD CIUDADANA', 0,'L');

//Respaldo de archivo XML
$archivo = __DIR__ . '/respaldos_licencias/info_licencia101.xml';
$Manejador = fopen($archivo, "w+");

fputs($Manejador, "<licencia>");
fputs($Manejador, "<domicilio>$Fila[0]</domicilio>\n");
fputs($Manejador, "<conductor>$Fila[1]</conductor>\n");
fputs($Manejador, "<RFC>$Fila[2]</RFC>\n");
fputs($Manejador, "<fecha>$Fila[3]</fecha>\n");
fputs($Manejador, "<folio>$Fila[4]</folio>\n");
fputs($Manejador, "<fecha_limite>$Fila[5]</fecha_limite>\n");
fputs($Manejador, "<importe>$Fila[6]</importe>\n");
fputs($Manejador, "<fundamentos>$Fila[7]</fundamentos>\n");

fputs($Manejador, "</licencia>");
fflush($Manejador); 
fclose($Manejador);


$pdf->Output('I');

?>