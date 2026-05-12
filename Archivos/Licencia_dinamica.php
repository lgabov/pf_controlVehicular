<?php

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
*/

//*-------------------------------


    include("Controlador.php");
    $Con = Conectar();
    //$Numero_licencia=$_GET['Numero_licencia'];
    $sql = "SELECT * FROM v_datoslicencia WHERE id = 100";
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);


    Desconectar($Con);
//-------------------------------------



require('fpdf.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pdf = new FPDF('P', 'mm', [54, 85]);
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);

//Encabezado
$pdf->SetFont('Arial','',3);
$pdf->Image('escudo.png', 5, 6, 7, 7);
$pdf->SetXY(14, 5);
$pdf->MultiCell(30,2,'Estados Unidos Mexicanos'
, 'L');
$pdf->SetXY(14, 7);
$pdf->MultiCell(30,2,'Poder Ejecutivo Del Esatado De Queretaro', 'L');
$pdf->SetXY(14, 10);
$pdf->SetFont('Arial','B',4);
$pdf->MultiCell(30,2,'Secretaria de educacion ciudadana', 'L');
$pdf->SetXY(14, 12);
$pdf->MultiCell(30,3,'Licencia para conducir', 'L');

//Foto
$pdf->Image('foto.jpeg', 30, 18, 20, 22);
$pdf->SetXY(15, 29);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'No. de Licencia',0, 'R');
$pdf->SetXY(10, 30);
$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(20,4, "$Fila[0]" ,0, 'R');
$pdf->SetXY(5, 34);
$pdf->SetFont('Arial','',6);
$pdf->MultiCell(25,3,'AUTOMOVILISTA',0, 'R');

//Nombre
$pdf->SetXY(42, 40);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(8,1,'Nombre',0, 'R');
$pdf->SetXY(25, 41);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(25,4,"$Fila[2]",0, 'R');
$pdf->SetXY(25, 45);
$pdf->MultiCell(25,4,"$Fila[3]",0, 'R');
$pdf->SetXY(15, 50);
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(35,4,"$Fila[1]",0, 'R');
$pdf->SetXY(40, 54);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(10,1,'observaciones',0, 'R');

//Datos
$pdf->SetXY(4, 55);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'Fecha de Nacimiento',0, 'L');
$pdf->SetXY(4, 56);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(15,3,"$Fila[4]",0, 'L');
$pdf->SetXY(4, 59);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'Fecha de Expedicion',0, 'L');
$pdf->SetXY(4, 60);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(15,3,"$Fila[5]",0, 'L');
$pdf->SetXY(4, 63);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'Valida hasta',0, 'L');
$pdf->SetXY(4, 64);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(15,3,"$Fila[6]",'0', 'L');
$pdf->SetXY(4, 67);
$pdf->SetFont('Arial','',3);
$pdf->MultiCell(15,1,'Antiguedad',0, 'L');
$pdf->SetXY(4, 68);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(15,3,"$Fila[7]",0, 'L');

$pdf->SetXY(13, 73);
$pdf->SetFont('Arial','',4);
$pdf->MultiCell(30,5,'AUTORIA PARA QUE LA PRESENTE SEA RECABADA COMO GARANTIA DE INFRACCION',0, 'C');


//REVERSO
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);


// 911
$pdf->SetFont('Arial', 'B', 7);
$pdf->SetXY(2, 4);
$pdf->Cell(12, 3, '911', 0, 0, 'C');
$pdf->SetXY(2, 7);
$pdf->SetFont('Arial', '', 3.5);
$pdf->Cell(12, 2, 'EMERGENCIAS', 0, 0, 'C');


//  DOMICILIO
$pdf->SetFont('Arial', 'B', 5);
$pdf->SetXY(30, 12);
$pdf->Cell(22, 3, 'Domicilio', 0, 0, 'R');
$pdf->SetFont('Arial', '', 5.5);
$pdf->SetXY(25, 15);
$pdf->MultiCell(27, 2.5, "$Fila[8]", 0, 'R');


//  DATOS MÉDICOS
$pdf->SetXY(25, 33);
$pdf->SetFont('Arial', 'B', 4);
$pdf->MultiCell(25, 1, 'Grupo Sanguineo', 0, 'R');
$pdf->SetFont('Arial', 'B', 6);
$pdf->SetXY(25, 34);
$pdf->MultiCell(25, 3, "$Fila[9]", 0, 'R');
$pdf->SetFont('Arial', 'B', 4);
$pdf->SetXY(25, 37);
$pdf->MultiCell(25, 1, 'Donante de Organos', 0, 'R');
$pdf->SetFont('Arial', 'B', 6);
$pdf->SetXY(25, 38);
$pdf->MultiCell(25, 3, "$Fila[10]", 0, 'R');
$pdf->SetFont('Arial', 'B', 4);
$pdf->SetXY(25, 41);


$pdf->SetXY(5, 55);
$pdf->SetFont('Arial', 'B', 4);
$pdf->Cell(47, 2, 'MTRO. EN GPA. MIGUEL ANGEL CONTRERAS ALVAREZ', 0, 1, 'L');
$pdf->Cell(47, 2, 'SECRETARIO DE SEGURIDAD CIUDADANA', 0, 1, 'L');

$pdf->SetXY(3, 62);
$pdf->SetFont('Arial', 'B', 4);
$pdf->Cell(20, 2, 'Fundamento Legal', 0, 1);
$pdf->SetFont('Arial', '', 3.2);
$pdf->SetXY(3, 65);
$pdf->MultiCell(48, 1.8, "Articulo 19 fraccion XIV y 33 fraccion I de la Ley Organica del Poder Ejecutivo del Estado de Queretaro, articulo 9 fraccion XIV y 55 de la Ley de Transito del Estado de Queretaro, articulo 4 de la Ley de Procedimientos Administrativos del Estado de Queretaro, articulo 134, 135, 136, 137, 138, 139, 140, 141, 142 y 143 del Reglamento de Transito del Estado de Queretaro, articulo 6, fraccion IV, inciso b) y 20 fraccion IV de la Ley de la Secretaria de Seguridad Ciudadana.", 0, 'L');

$pdf->SetXY(15, 76);
$pdf->SetFont('Arial', 'B', 5);
$pdf->MultiCell(30, 2.5, "SECRETARIA DE SEGURIDAD CIUDADANA", 0, 'L');


$pdf->Output('I');



?>