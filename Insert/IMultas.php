<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

    //Recibir valores
    $Folio = $_POST['Folio'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Reporte_seccion = $_POST['Reporte_seccion'];
    $Nombre_via = $_POST['Nombre_via'];
    $Kilometro = $_POST['Kilometro'];
    $Fundamentos = $_POST['Fundamentos'];
    $Observaciones_personal = $_POST['Observaciones_personal'];
    $Observaciones_conductor = $_POST['Observaciones_conductor'];
    $Id_oficial = $_POST['Id_oficial'];
    $Id_pago = $_POST['Id_pago'];

    //Mostrar valores
    /*
    print("Folio= " . $Folio . "<br>");
    print("Fecha= " . $Fecha . "<br>");
    print("Hora= " . $Hora . "<br>");
    print("Reporte_seccion= " . $Reporte_seccion . "<br>");
    print("Nombre_via= " . $Nombre_via . "<br>");
    print("Kilometro= " . $Kilometro . "<br>");
    print("Fundamentos= " . $Fundamentos . "<br>");
    print("Observaciones_personal= " . $Observaciones_personal . "<br>");
    print("Observaciones_conductor= " . $Observaciones_conductor . "<br>");
    print("Id_oficial= " . $Id_oficial . "<br>");
    print("Id_pago= " . $Id_pago . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Multas (Folio, Fecha, Hora, Reporte_seccion, Nombre_via, Kilometro, Fundamentos, Observaciones_personal, Observaciones_conductor, Id_oficial, Id_pago)
    VALUES ('$Folio', '$Fecha', '$Hora', '$Reporte_seccion', '$Nombre_via', '$Kilometro', '$Fundamentos', '$Observaciones_personal', '$Observaciones_conductor', '$Id_oficial', '$Id_pago');";
    //print("<br>".$sql);

    //Ejecutar la instrucción al SMBD
    include("../Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);

    if($ResultSet == 1){
        print("1 Registro insertado");
    } else {
        print($ResultSet);
    }

    Desconectar($Con);

?>